<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

/**
 * Manufacturing Dashlet Metadata
 */

global $app_strings;

$dashletMeta['ManufacturingDashlet'] = array(
    'module'      => 'Home',
    'title'       => 'Manufacturing Overview',
    'description' => 'Display key manufacturing metrics including production status, quality scores, and supply chain alerts',
    'icon'        => '',
    'category'    => 'Module Views'
); 