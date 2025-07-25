<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/Dashlets/Dashlet.php');

class ManufacturingOverviewDashlet extends Dashlet {
    public $height = 315; // default height

    public function __construct($id, $def) {
        parent::__construct($id);
        $this->isConfigurable = true;
        $this->hasScript = true; // if we need JS

        if (empty($def['title'])) {
            $this->title = translate('LBL_MANUFACTURING_OVERVIEW', 'Home'); // Assume we add language strings later
        } else {
            $this->title = $def['title'];
        }

        if (!empty($def['height'])) {
            $this->height = (int)$def['height'];
        }
    }

    /**
     * Display the dashlet content.
     * Fetches manufacturing data and renders the template.
     * Tested for basic display and interactivity on the dashboard.
     */
    public function display() {
        global $db;
        $ss = new Sugar_Smarty();
        $ss->assign('id', $this->id);
        $ss->assign('height', $this->height);

        // Fetch total products with low inventory
        $low_inventory_count = $db->getOne("SELECT COUNT(id) FROM aos_products WHERE inventory_level < low_threshold");
        $ss->assign('low_inventory_count', $low_inventory_count);

        // Fetch opportunities in production
        $production_opps_count = $db->getOne("SELECT COUNT(id) FROM opportunities WHERE production_status = 'in_production'");
        $ss->assign('production_opps_count', $production_opps_count);

        // Additional data fetching can be added here as needed

        // Create modern chart data for RGraph (like other working dashlets)
        $total_products = $db->getOne("SELECT COUNT(id) FROM aos_products") ?: 0;
        $low_inventory_count = $low_inventory_count ?: 0;
        $normal_inventory = $total_products - $low_inventory_count;
        
        // Prepare chart data
        $chartData = array($low_inventory_count, $normal_inventory);
        $chartLabels = array('Low Inventory', 'Normal Inventory');
        $chartColors = "['#e31a1c', '#33a02c']"; // Red for low, green for normal
        
        $canvasId = 'manufacturingChart' . uniqid();
        $chartWidth = 400;
        $chartHeight = 300;
        
        // Encode data for JavaScript
        $jsonData = json_encode($chartData);
        $jsonLabels = json_encode($chartLabels);
        
        $ss->assign('canvas_id', $canvasId);
        $ss->assign('chart_width', $chartWidth);
        $ss->assign('chart_height', $chartHeight);
        $ss->assign('chart_data', $jsonData);
        $ss->assign('chart_labels', $jsonLabels);
        $ss->assign('chart_colors', $chartColors);

        $display = $ss->fetch('custom/modules/Home/Dashlets/ManufacturingOverviewDashlet/ManufacturingOverviewDashlet.tpl');

        return parent::display() . $display;
    }

    public function displayScript() {
        // Return RGraph resources for charts
        return '
        <script language="javascript" type="text/javascript" src="'.getJSPath('include/SugarCharts/Jit/js/Jit/jit.js').'"></script>
        <script language="javascript" type="text/javascript" src="'.getJSPath('include/SugarCharts/Jit/js/sugarCharts.js').'"></script>
        ';
    }

    /**
     * Documentation: This dashlet provides an overview of manufacturing metrics.
     * Users can add it to their dashboard via Add Dashlet.
     * Configure title and height as needed.
     */
    public function displayOptions() {
        // Configuration form
        global $app_strings;
        $ss = new Sugar_Smarty();
        $ss->assign('id', $this->id);
        $ss->assign('title', $this->title);
        $ss->assign('height', $this->height);
        $ss->assign('saveLBL', $app_strings['LBL_SAVE_BUTTON_LABEL']);

        return $ss->fetch('custom/modules/Home/Dashlets/ManufacturingOverviewDashlet/ManufacturingOverviewDashletConfigure.tpl');
    }

    public function saveOptions($req) {
        $options = array();
        if (isset($req['title'])) {
            $options['title'] = $req['title'];
        }
        if (isset($req['height']) && is_numeric($req['height']) && $req['height'] > 0) {
            $options['height'] = min((int)$req['height'], 600); // cap height
        }
        return $options;
    }
} 