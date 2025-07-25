<?php
/**
 * Custom language overrides for Manufacturing features
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

// Manufacturing tab group label
$app_strings['LBL_TABGROUP_MANUFACTURING'] = 'Manufacturing'; 

/**
 * Custom dropdown options for Supplier Performance Analytics
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

// Supplier Performance Rating options
$app_list_strings['supplier_performance_rating_list'] = array(
    'excellent' => 'Excellent (90-100%)',
    'good' => 'Good (75-89%)',
    'average' => 'Average (60-74%)',
    'below_average' => 'Below Average (40-59%)',
    'poor' => 'Poor (0-39%)',
);

// Manufacturing KPI Type options
$app_list_strings['manufacturing_kpi_type_list'] = array(
    '' => '',
    'efficiency_ratio' => 'Efficiency Ratio Analysis',
    'yield_prediction' => 'Yield Prediction Model',
    'bottleneck_analysis' => 'Bottleneck Analysis',
    'cost_variance' => 'Cost Variance Analysis',
    'quality_metrics' => 'Quality Metrics Dashboard',
    'throughput_analysis' => 'Throughput Analysis',
    'capacity_utilization' => 'Capacity Utilization',
    'overall_equipment_effectiveness' => 'Overall Equipment Effectiveness (OEE)',
);

// KPI Calculation Period options
$app_list_strings['kpi_calculation_period_list'] = array(
    'current_day' => 'Current Day',
    'current_week' => 'Current Week',
    'current_month' => 'Current Month',
    'current_quarter' => 'Current Quarter',
    'current_year' => 'Current Year',
    'last_7_days' => 'Last 7 Days',
    'last_30_days' => 'Last 30 Days',
    'last_90_days' => 'Last 90 Days',
    'last_12_months' => 'Last 12 Months',
    'custom_range' => 'Custom Date Range',
); 