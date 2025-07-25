<?php
/**
 * Products, Quotations & Invoices modules.
 * Extensions to SugarCRM
 * @package Advanced OpenSales for SugarCRM
 * @subpackage Products
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility Ltd <support@salesagility.com>
 */

/**
 * THIS CLASS IS FOR DEVELOPERS TO MAKE CUSTOMIZATIONS IN
 */
require_once('modules/AOS_Products/AOS_Products_sugar.php');
#[\AllowDynamicProperties]
class AOS_Products extends AOS_Products_sugar
{
    public function __construct()
    {
        parent::__construct();
    }



    public function getGUID()
    {
        if (function_exists('com_create_guid')) {
            return com_create_guid();
        }
        mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(mt_rand(), true)));
        $hyphen = chr(45);// "-"
        $uuid = substr($charid, 0, 8).$hyphen
                .substr($charid, 8, 4).$hyphen
                .substr($charid, 12, 4).$hyphen
                .substr($charid, 16, 4).$hyphen
                .substr($charid, 20, 12);
        return $uuid;
    }

    public function save($check_notify = false)
    {
        global $sugar_config, $mod_strings;

        if (isset($_POST['deleteAttachment']) && $_POST['deleteAttachment'] == '1') {
            $this->product_image = '';
        }

        require_once('include/upload_file.php');
        $GLOBALS['log']->debug('UPLOADING PRODUCT IMAGE');

        if(!empty($_FILES['uploadimage']['name'])){
            $imageFileName = $_FILES['uploadimage']['name'] ?? '';
            if (!has_valid_image_extension('AOS_Products Uploaded image file: ' . $imageFileName , $imageFileName)) {
                LoggerManager::getLogger()->fatal("AOS_Products save - Invalid image file ext : '$imageFileName'.");
                throw new RuntimeException('Invalid request');
            }
        }

        $upload_file = new UploadFile('uploadimage');

        if (isset($_FILES['uploadimage']) && $upload_file->confirm_upload()) {
            $this->product_image = $upload_file->get_stored_file_name();
            $upload_file->final_move($this->product_image);
        }

        // Original AOS functionality
        require_once('modules/AOS_Products_Quotes/AOS_Utils.php');
        perform_aos_save($this);

        // Calculate inventory status before saving
        $this->calculateInventoryStatus();
        
        // Auto-calculate reorder points and forecasts if enabled
        $this->calculateReorderPoint();
        $this->calculateForecastDemand();
        
        // Update last inventory check timestamp (store UTC in DB)
        global $timedate;
        if (!isset($timedate)) {
            require_once('include/TimeDate.php');
            $timedate = new TimeDate();
        }
        $this->last_inventory_check = $timedate->nowDb();

        return parent::save($check_notify);
    }

    /**
     * Calculate inventory status based on current level and thresholds
     */
    public function calculateInventoryStatus()
    {
        try {
            $currentLevel = intval($this->inventory_level);
            $criticalThreshold = intval($this->threshold_critical);
            $lowThreshold = intval($this->threshold_low);
            
            // Set default thresholds if not set
            if ($criticalThreshold <= 0) {
                $criticalThreshold = 5;
            }
            if ($lowThreshold <= 0) {
                $lowThreshold = 10;
            }
            
            // Calculate status based on levels
            if ($currentLevel <= 0) {
                $this->inventory_status = 'Out_of_Stock';
            } elseif ($currentLevel <= $criticalThreshold) {
                $this->inventory_status = 'Critical';
            } elseif ($currentLevel <= $lowThreshold) {
                $this->inventory_status = 'Low';
            } elseif ($currentLevel > ($lowThreshold * 3)) {
                $this->inventory_status = 'Excess';
            } else {
                $this->inventory_status = 'Normal';
            }
            
            LoggerManager::getLogger()->info("Inventory status calculated for {$this->name}: Status={$this->inventory_status}, Level={$currentLevel}, Critical={$criticalThreshold}, Low={$lowThreshold}");
            
        } catch (Exception $e) {
            LoggerManager::getLogger()->error("Error calculating inventory status for product {$this->id}: " . $e->getMessage());
            $this->inventory_status = 'Normal'; // Default to normal on error
        }
    }

    /**
     * Calculate reorder point based on historical usage and lead time
     * Formula: (Average Daily Usage * Lead Time Days) + Safety Stock
     */
    public function calculateReorderPoint()
    {
        try {
            // Get average daily usage from historical data (last 90 days)
            $averageDailyUsage = $this->getAverageDailyUsage(90);
            
            // Assume 14-day lead time (can be made configurable)
            $leadTimeDays = 14;
            
            // Calculate reorder point
            $calculatedReorderPoint = ($averageDailyUsage * $leadTimeDays) + intval($this->safety_stock);
            
            // Only update if there's a significant change (more than 10% difference)
            $currentReorderPoint = intval($this->reorder_point);
            if ($currentReorderPoint == 0 || abs($calculatedReorderPoint - $currentReorderPoint) / $currentReorderPoint > 0.1) {
                $this->reorder_point = max(1, $calculatedReorderPoint); // Minimum of 1
            }
            
            LoggerManager::getLogger()->debug("Calculated reorder point for {$this->name}: {$this->reorder_point}");
            
        } catch (Exception $e) {
            LoggerManager::getLogger()->error("Error calculating reorder point for product {$this->id}: " . $e->getMessage());
        }
    }

    /**
     * Calculate forecast demand for the next period based on historical trends
     * Uses a simple moving average with trend adjustment
     */
    public function calculateForecastDemand()
    {
        try {
            // Get usage data for last 3 months for trend analysis
            $usage30Days = $this->getUsageForPeriod(30);
            $usage60Days = $this->getUsageForPeriod(60);
            $usage90Days = $this->getUsageForPeriod(90);

            if ($usage30Days > 0 && $usage60Days > 0 && $usage90Days > 0) {
                // Calculate trend (simple linear trend)
                $trend = ($usage30Days - $usage60Days) * 0.5; // Weight recent data more
                
                // Base forecast on 30-day average with trend adjustment
                $baseForecast = $usage30Days;
                $forecastDemand = max(0, round($baseForecast + $trend));
                
                $this->forecast_demand = $forecastDemand;
                
                LoggerManager::getLogger()->debug("Calculated forecast demand for {$this->name}: {$this->forecast_demand}");
            }
            
        } catch (Exception $e) {
            LoggerManager::getLogger()->error("Error calculating forecast demand for product {$this->id}: " . $e->getMessage());
        }
    }

    /**
     * Get average daily usage over a specified period
     */
    private function getAverageDailyUsage($days)
    {
        $totalUsage = $this->getUsageForPeriod($days);
        return $days > 0 ? round($totalUsage / $days, 2) : 0;
    }

    /**
     * Get total usage/consumption for a specific period
     * This looks at AOS_Products_Quotes to estimate consumption
     */
    private function getUsageForPeriod($days)
    {
        global $db;
        
        $startDate = date('Y-m-d', strtotime("-{$days} days"));
        
        // Query to get total quantity sold/quoted in the period
        $query = "
            SELECT COALESCE(SUM(pq.product_qty), 0) as total_usage
            FROM aos_products_quotes pq
            INNER JOIN aos_quotes q ON pq.parent_id = q.id
            WHERE pq.product_id = " . $db->quoted($this->id) . "
            AND pq.deleted = 0
            AND q.deleted = 0
            AND q.date_entered >= " . $db->quoted($startDate) . "
            AND q.stage IN ('Delivered', 'Closed Accepted')
        ";

        $result = $db->query($query);
        if ($result && $row = $db->fetchByAssoc($result)) {
            return floatval($row['total_usage']);
        }
        
        return 0;
    }

    /**
     * Check if product needs reordering
     */
    public function needsReordering()
    {
        return intval($this->inventory_level) <= intval($this->reorder_point);
    }

    /**
     * Get inventory status color for UI display
     */
    public function getInventoryStatusColor()
    {
        switch ($this->inventory_status) {
            case 'Critical':
                return '#FF0000'; // Red
            case 'Low':
                return '#FFA500'; // Orange
            case 'Out_of_Stock':
                return '#8B0000'; // Dark Red
            case 'Excess':
                return '#0000FF'; // Blue
            case 'Normal':
            default:
                return '#008000'; // Green
        }
    }

    /**
     * Get inventory status display for views
     */
    public function getInventoryStatusDisplay()
    {
        $color = $this->getInventoryStatusColor();
        $status = $this->inventory_status;
        
        // Convert status to display format
        $displayStatus = str_replace('_', ' ', $status);
        
        return "<span style='color: {$color}; font-weight: bold;'>{$displayStatus}</span>";
    }

    /**
     * Check if inventory is below reorder point
     */
    public function isReorderNeeded()
    {
        return $this->needsReordering();
    }

    /**
     * Manual inventory adjustment method
     */
    public function adjustInventory($adjustment, $reason = '')
    {
        $oldLevel = intval($this->inventory_level);
        $this->inventory_level = max(0, $oldLevel + $adjustment);
        
        // Log the adjustment
        LoggerManager::getLogger()->info("Inventory adjusted for {$this->name}: {$oldLevel} -> {$this->inventory_level} (Reason: {$reason})");
        
        // Trigger save to update status
        $this->save();
        
        return $this->inventory_level;
    }

    public function getCustomersPurchasedProductsQuery()
    {
        $query = "
 			SELECT * FROM (
 				SELECT
					aos_quotes.*,
					accounts.id AS account_id,
					accounts.name AS billing_account,

					opportunity_id AS opportunity,
					billing_contact_id AS billing_contact,
					'' AS created_by_name,
					'' AS modified_by_name,
					'' AS assigned_user_name
				FROM
					aos_products

				JOIN aos_products_quotes ON aos_products_quotes.product_id = aos_products.id AND aos_products.id = '{$this->id}' AND aos_products_quotes.deleted = 0 AND aos_products.deleted = 0
				JOIN aos_quotes ON aos_quotes.id = aos_products_quotes.parent_id AND aos_quotes.stage = 'Closed Accepted' AND aos_quotes.deleted = 0
				JOIN accounts ON accounts.id = aos_quotes.billing_account_id -- AND accounts.deleted = 0

				GROUP BY aos_quotes.id
			) AS aos_quotes

		";
        return $query;
    }
}
