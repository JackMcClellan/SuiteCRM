<?php 
/**
 * Custom Tab Configuration for SuiteCRM Manufacturing Features
 * 
 * The Manufacturing tab has been customized to only include modules where
 * manufacturing enhancements have been implemented:
 * 
 * 1. Home - Manufacturing Overview Dashlet
 * 2. Accounts - Customer/Supplier management for manufacturing
 * 3. Opportunities - Enhanced Production Tracking 
 * 4. AOS_Products - Inventory Monitoring & Threshold Notifications
 * 5. Cases - Comprehensive Quality Control Subpanel
 * 6. AOS_Quotes - Detailed Supplier Performance Analytics
 * 7. AOR_Reports - Internal Manufacturing KPI Calculator
 * 
 * This focused view makes it easier to demo the manufacturing features
 * by showing only the areas where changes have been made.
 */

$GLOBALS["tabStructure"] =array (
  'LBL_TABGROUP_SALES' => 
  array (
    'label' => 'LBL_TABGROUP_SALES',
    'modules' => 
    array (
      0 => 'Home',
      1 => 'Accounts',
      2 => 'Contacts',
      3 => 'Opportunities',
      4 => 'Leads',
      5 => 'Contracts',
      6 => 'Quotes',
      7 => 'Forecasts',
    ),
  ),
  'LBL_TABGROUP_MARKETING' => 
  array (
    'label' => 'LBL_TABGROUP_MARKETING',
    'modules' => 
    array (
      0 => 'Home',
      1 => 'Accounts',
      2 => 'Contacts',
      3 => 'Leads',
      4 => 'Campaigns',
      5 => 'Prospects',
      6 => 'ProspectLists',
    ),
  ),
  'LBL_TABGROUP_MANUFACTURING' => 
  array (
    'label' => 'LBL_TABGROUP_MANUFACTURING',
    'modules' => 
    array (
      0 => 'Home',
      1 => 'Accounts',
      2 => 'Opportunities',
      3 => 'AOS_Products',
      4 => 'Cases',
      5 => 'AOS_Quotes',
      6 => 'AOR_Reports',
    ),
  ),
  'LBL_TABGROUP_ACTIVITIES' => 
  array (
    'label' => 'LBL_TABGROUP_ACTIVITIES',
    'modules' => 
    array (
      0 => 'Home',
      1 => 'Calendar',
      2 => 'Calls',
      3 => 'Meetings',
      4 => 'Emails',
      5 => 'Tasks',
      6 => 'Notes',
    ),
  ),
);