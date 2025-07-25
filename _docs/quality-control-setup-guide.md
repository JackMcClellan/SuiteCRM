# Quality Control Feature - Setup and Usage Guide

## 🚀 Quick Setup Instructions

### Step 1: Activate the Feature
1. **Login as Administrator**
2. **Navigate to Admin → Repair → Quick Repair & Rebuild**
3. **Click "Execute"** to activate the new fields and subpanels
4. The system will automatically create database columns and register the customizations

### Step 2: Verify Installation
1. **Go to Cases Module**
2. **Open any existing case or create a new one**
3. **Look for the "Quality Control Information" panel** in the detail/edit view
4. **Check for the "Quality Control Products" subpanel** at the bottom of the case detail view

---

## 📋 How to Use Quality Control Features

### Creating a Quality Control Case

1. **Navigate to Cases → Create Case**
2. **Fill in standard case information** (Name, Account, Priority, etc.)
3. **In the "Quality Control Information" panel:**
   - **QC Batch Number**: Enter the batch/lot number being inspected
   - **Related Product**: Select the product from the dropdown (links to AOS_Products)
   - **Defect Category**: Choose from 10 predefined categories:
     - Material Defect, Manufacturing Defect, Design Defect, Packaging Defect, Contamination, Dimensional Issue, Finish/Surface Issue, Functional Issue, Safety Issue, Other
   - **Severity Level**: Select Low, Medium, High, or Critical
   - **Quantity Affected**: Enter the number of units affected
   - **Quality Inspector**: Assign a user as the inspector
   - **QC Status**: System auto-sets to "New" or manually select: New, In Progress, Corrective Action Required, Resolved, Closed, Rejected
   - **Corrective Action**: Describe remedial actions taken
4. **Save the case** - The system automatically:
   - Sets inspection date if inspector is assigned
   - Creates audit trail entry
   - Validates required fields

### 🆕 Quick Create Quality Control Cases from Dashboard

**NEW: Quality Control Quick Create Dashlet**

1. **Add the Dashlet to Your Dashboard:**
   - Go to your Home dashboard
   - Click "Add Dashlets"
   - Look for "Quick Create Quality Control Case" under the Tools category
   - Click "Add" to add it to your dashboard

2. **Configure the Dashlet (Optional):**
   - Click the pencil icon on the dashlet header
   - Customize the title
   - Adjust the height (default 400 pixels, max 800 pixels)
   - Click Save

3. **Use the Quick Create Form:**
   - **Case Information Section:**
     - Subject (Required): Brief description of the quality issue
     - Account (Required): Select the affected customer/supplier
     - Priority: Defaults to P2, can be changed
     - Status: Defaults to "New"
   
   - **Quality Control Information Section:**
     - QC Batch Number (Required): Enter the batch/lot number
     - Related Product (Required): Select from AOS_Products
     - Defect Category (Required): Choose the type of defect
     - Severity Level (Required): Low, Medium, High, or Critical
     - Quantity Affected (Required): Number of units affected
     - Quality Inspector: Defaults to current user
     - QC Status: Defaults to "New"
     - Corrective Action: Optional text for immediate actions

4. **Save the Case:**
   - Click "Save" to create the case
   - Form automatically clears after successful save
   - Success message confirms creation
   - Case is created with full audit trail

5. **Benefits of Quick Create:**
   - ✅ No navigation away from dashboard
   - ✅ Pre-filled inspector (current user)
   - ✅ All required QC fields in one compact form
   - ✅ Instant case creation for rapid response
   - ✅ Perfect for production floor terminals

### Using the Quality Control Subpanel

1. **Open any Case with QC data**
2. **Scroll to "Quality Control Products" subpanel**
3. **The subpanel displays:**
   - Batch Number, Product Name, Defect Category
   - Severity Level, Quantity Affected, QC Status
   - Inspector Name, Inspection Date
   - Edit/Remove buttons for quick actions
4. **Use "Create" button** to add new QC entries
5. **Use "Select" button** to link existing products

### Audit Trail Functionality

The system automatically logs all changes to QC fields:
- **New QC cases**: "Quality control case created by [User] on [Timestamp]"
- **Field changes**: "[Timestamp] [Field] changed from '[Old Value]' to '[New Value]' by [User]"
- **View audit trail** in the "Audit Trail" field on the case

---

## 📊 Quality Control Reports

### Pre-Built Report Templates

Three report templates are available in `custom/modules/AOR_Reports/quality_control_reports.php`:

#### 1. Defect Trend Analysis
- **Purpose**: Track defect patterns over time
- **Fields**: Defect category, severity, quantity, inspection date, product, status
- **Charts**: 
  - Bar chart: Defects by category
  - Line chart: Defect trends over time
- **Filter**: Last 90 days of data

#### 2. Product Quality Metrics  
- **Purpose**: Analyze quality issues by product
- **Fields**: Product name, defect category, severity, quantity, status
- **Charts**: Pie chart showing quality issues by product
- **Filter**: Products with quality issues

#### 3. Inspector Performance
- **Purpose**: Track inspector workload and performance
- **Fields**: Inspector name, defect category, severity, inspection date, status  
- **Charts**: Bar chart of inspections by inspector
- **Filter**: Cases with assigned inspectors

### Creating Custom Reports

1. **Navigate to Reports → AOR_Reports → Create**
2. **Select "Cases" as the module**
3. **Add QC fields** from the available field list:
   - QC Batch Number (`qc_batch_number`)
   - Defect Category (`qc_defect_category`) 
   - Severity Level (`qc_severity_level`)
   - Quantity Affected (`qc_quantity_affected`)
   - Related Product (`qc_product_name`)
   - Quality Inspector (`qc_inspector_name`)
   - Inspection Date (`qc_inspection_date`)
   - QC Status (`qc_status`)
   - Corrective Action (`qc_corrective_action`)
4. **Add conditions** to filter data (e.g., defect category not empty)
5. **Create charts** using SugarCharts integration
6. **Save and run** the report

---

## 🔧 Advanced Configuration

### Customizing Dropdown Values

Edit the dropdown options in `custom/application/Ext/Language/en_us.qc_lang.php`:

```php
// Add new defect categories
$app_list_strings['qc_defect_category_list']['electrical'] = 'Electrical Issue';

// Add new severity levels  
$app_list_strings['qc_severity_level_list']['urgent'] = 'Urgent';

// Add new QC statuses
$app_list_strings['qc_status_list']['on_hold'] = 'On Hold';
```

### Adding Custom Validation Rules

Modify the validation logic in `custom/modules/Cases/Case.php`:

```php
public function validateQualityControlFields()
{
    $errors = array();
    
    // Add your custom validation rules here
    if (!empty($this->qc_severity_level) && $this->qc_severity_level == 'critical') {
        if (empty($this->qc_corrective_action)) {
            $errors[] = 'Corrective Action is required for Critical severity cases';
        }
    }
    
    return $errors;
}
```

### Linking QC Cases to Products for Tracking

To assign a report/case to a product for tracking:

1. **Create or Edit a QC Case**
2. **Use the "Related Product" field** to link to an AOS_Products record
3. **The system automatically tracks:**
   - All quality issues for that product
   - Historical defect patterns
   - Total units affected over time
4. **View product quality history** by running the "Product Quality Metrics" report
5. **Product managers can access** quality data through the related cases

---

## 🎯 Business Use Cases

### Manufacturing Quality Control
- Track batch defects during production
- Monitor production line quality metrics
- Assign inspectors to specific product lines
- Generate regulatory compliance reports

### Incoming Inspection
- Record supplier quality issues
- Track defect trends by supplier/product
- Manage corrective action requests
- Monitor inspector workload

### Customer Quality Complaints
- Link customer complaints to specific batches
- Track resolution times by severity
- Analyze repeat defect patterns
- Generate customer quality reports

### Quality Audits
- Document audit findings with batch traceability
- Assign corrective actions to responsible parties
- Track audit resolution progress
- Generate audit trail reports for compliance

---

## 🔍 Troubleshooting

### QC Fields Not Showing
- Run Quick Repair & Rebuild from Admin panel
- Clear browser cache and refresh
- Check that custom files are in correct directories

### Subpanel Not Appearing
- Verify `custom/modules/Cases/metadata/subpaneldefs.php` exists
- Run Quick Repair & Rebuild
- Check that subpanel layout file exists in correct path

### Validation Not Working
- Check PHP error logs for validation errors
- Verify custom Case.php class is being loaded
- Test with different severity levels and field combinations

### Reports Not Working
- Verify AOR_Reports module is enabled
- Check that QC fields appear in report field selector
- Import report templates manually if needed

### Quick Create Dashlet Issues
- Clear cache: Admin → Repair → Clear Cache
- Refresh browser and reload dashboard
- Check JavaScript console for errors
- Ensure all required fields are filled before saving

---

## 📈 Success Metrics

Track these KPIs to measure QC feature effectiveness:
- **Defect Detection Rate**: % of defects caught before shipment
- **Resolution Time**: Average time from detection to resolution
- **Repeat Defects**: Rate of recurring issues by product/batch
- **Inspector Efficiency**: Cases processed per inspector per time period
- **Corrective Action Effectiveness**: % of corrective actions that prevent recurrence
- **Quick Create Usage**: Number of cases created via dashlet vs standard form

The Quality Control feature provides comprehensive tracking and analysis capabilities to help maintain product quality standards and regulatory compliance. 