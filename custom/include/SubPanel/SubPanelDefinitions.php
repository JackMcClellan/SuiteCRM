<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

require_once('include/SubPanel/SubPanelDefinitions.php');

/**
 * Custom SubPanelDefinitions class to handle null subpanel_setup arrays gracefully
 * This prevents PHP warnings when custom subpanel definitions are not properly initialized
 */
#[\AllowDynamicProperties]
class CustomSubPanelDefinitions extends SubPanelDefinitions
{
    /**
     * Override load_subpanel to handle null subpanel_setup arrays
     */
    public function load_subpanel($name, $reload = false, $original_only = false, $search_query = '', $collections = array())
    {
        $panelName = strtolower($name);

        // Defensive check: ensure layout_defs and subpanel_setup exist
        if (!isset($this->layout_defs) || !is_array($this->layout_defs)) {
            LoggerManager::getLogger()->error(
                sprintf(
                    "Layout definitions not properly initialized for module %s",
                    $this->_focus->module_dir
                )
            );
            return false;
        }

        if (!isset($this->layout_defs['subpanel_setup']) || !is_array($this->layout_defs['subpanel_setup'])) {
            LoggerManager::getLogger()->error(
                sprintf(
                    "Subpanel setup not properly initialized for module %s",
                    $this->_focus->module_dir
                )
            );
            return false;
        }

        if (!array_key_exists($panelName, $this->layout_defs['subpanel_setup'])) {
            LoggerManager::getLogger()->error(
                sprintf(
                    "Trying to load subpanel without definition: %s in module %s",
                    $panelName,
                    $this->_focus->module_dir
                )
            );
            return false;
        }

        // Continue with parent logic
        return parent::load_subpanel($name, $reload, $original_only, $search_query, $collections);
    }
} 