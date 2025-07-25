<?php
// Simple database setup script for inventory monitoring fields
echo "<!DOCTYPE html><html><head><title>Inventory Monitoring Database Setup</title></head><body>";
echo "<h2>Inventory Monitoring Database Setup</h2>\n";

// Read database config from SuiteCRM's config.php
require_once('config.php');

// Extract database connection details
$db_host = $sugar_config['dbconfig']['db_host_name'];
$db_user = $sugar_config['dbconfig']['db_user_name']; 
$db_pass = $sugar_config['dbconfig']['db_password'];
$db_name = $sugar_config['dbconfig']['db_name'];

echo "<p>Connecting to database: <strong>$db_name</strong> on <strong>$db_host</strong></p>\n";

try {
    // Create direct database connection
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<p style='color: green;'>✅ Database connection successful!</p>\n";
    
    // Define the inventory fields to add to aos_products table
    $inventory_fields = array(
        'inventory_level' => "ALTER TABLE aos_products ADD COLUMN inventory_level INT DEFAULT 0",
        'low_threshold' => "ALTER TABLE aos_products ADD COLUMN low_threshold INT DEFAULT 0",
        'critical_threshold' => "ALTER TABLE aos_products ADD COLUMN critical_threshold INT DEFAULT 0",
        'reorder_point' => "ALTER TABLE aos_products ADD COLUMN reorder_point INT DEFAULT 0",
        'safety_stock' => "ALTER TABLE aos_products ADD COLUMN safety_stock INT DEFAULT 0",
        'inventory_status' => "ALTER TABLE aos_products ADD COLUMN inventory_status VARCHAR(50) DEFAULT 'good'",
        'forecast_demand' => "ALTER TABLE aos_products ADD COLUMN forecast_demand DECIMAL(10,2) DEFAULT 0",
        'last_inventory_check' => "ALTER TABLE aos_products ADD COLUMN last_inventory_check DATETIME NULL",
        'inventory_notes' => "ALTER TABLE aos_products ADD COLUMN inventory_notes TEXT NULL"
    );
    
    echo "<p>Adding Inventory Monitoring fields to aos_products table...</p>\n";
    
    $success_count = 0;
    $error_count = 0;
    
    foreach ($inventory_fields as $field_name => $sql) {
        echo "<p>Adding field: <strong>$field_name</strong>... ";
        
        // Check if field already exists
        $check_query = "SHOW COLUMNS FROM aos_products LIKE '$field_name'";
        $result = $pdo->query($check_query);
        
        if ($result->rowCount() > 0) {
            echo "<span style='color: orange;'>Already exists</span></p>\n";
            $success_count++;
        } else {
            try {
                $pdo->exec($sql);
                echo "<span style='color: green;'>Added successfully</span></p>\n";
                $success_count++;
            } catch (Exception $e) {
                echo "<span style='color: red;'>Error: " . $e->getMessage() . "</span></p>\n";
                $error_count++;
            }
        }
    }
    
    echo "<h3>Results Summary</h3>\n";
    echo "<p><strong style='color: green;'>Successfully processed: $success_count fields</strong></p>\n";
    if ($error_count > 0) {
        echo "<p><strong style='color: red;'>Errors encountered: $error_count fields</strong></p>\n";
    }
    
    // Update inventory status for existing products based on their levels
    echo "<h3>Updating Inventory Status for Existing Products</h3>\n";
    try {
        // First, ensure we have the necessary columns
        $update_status_query = "
            UPDATE aos_products 
            SET inventory_status = CASE
                WHEN inventory_level <= critical_threshold AND critical_threshold > 0 THEN 'critical'
                WHEN inventory_level <= low_threshold AND low_threshold > 0 THEN 'low'
                ELSE 'good'
            END
            WHERE deleted = 0
        ";
        
        $affected = $pdo->exec($update_status_query);
        echo "<p style='color: green;'>✅ Updated inventory status for $affected products</p>\n";
    } catch (Exception $e) {
        echo "<p style='color: orange;'>Could not update inventory status: " . $e->getMessage() . "</p>\n";
    }
    
    echo "<h3>Verification</h3>\n";
    echo "<p>Checking if all inventory fields exist in aos_products table:</p>\n";
    
    $verify_query = "SHOW COLUMNS FROM aos_products WHERE Field IN ('inventory_level', 'low_threshold', 'critical_threshold', 'reorder_point', 'safety_stock', 'inventory_status', 'forecast_demand', 'last_inventory_check', 'inventory_notes')";
    $result = $pdo->query($verify_query);
    
    echo "<ul>\n";
    $field_count = 0;
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<li><strong>" . $row['Field'] . "</strong> - Type: " . $row['Type'] . "</li>\n";
        $field_count++;
    }
    echo "</ul>\n";
    
    if ($field_count >= 9) {
        echo "<p><strong style='color: green;'>✅ Database setup complete! All $field_count inventory fields are present.</strong></p>\n";
        echo "<p><strong>Next Steps:</strong></p>\n";
        echo "<ol>\n";
        echo "<li>Go to AOS_Products module in SuiteCRM</li>\n";
        echo "<li>Edit your products to set inventory levels and thresholds</li>\n";
        echo "<li>The Inventory Monitoring dashlet will now display your products</li>\n";
        echo "</ol>\n";
        
        echo "<hr>\n";
        echo "<p style='color: blue;'><strong>Success!</strong> Inventory database setup is complete.</p>\n";
        echo "<p>You can now delete this file (inventory_database_setup.php) and refresh your dashboard.</p>\n";
    } else {
        echo "<p><strong style='color: red;'>⚠️ Only $field_count inventory fields found. Expected 9 fields.</strong></p>\n";
        echo "<p>Please check for any error messages above.</p>\n";
    }
    
} catch (Exception $e) {
    echo "<p style='color: red;'><strong>Database connection failed:</strong> " . $e->getMessage() . "</p>\n";
    echo "<p>Please check your database configuration in config.php</p>\n";
}

echo "</body></html>";
?> 