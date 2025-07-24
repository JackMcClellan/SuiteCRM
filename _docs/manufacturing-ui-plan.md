# Manufacturing-Centered UI Simplification Plan

This plan outlines the steps to customize SuiteCRM for manufacturing companies, focusing on simplifying the main top navigation bar and the home dashboard page. It draws from the ideas in _docs/ideas.md for Feature 2.

## Overall Goals
- Create a manufacturing-specific customization framework.
- Simplify the top bar to prioritize manufacturing modules (e.g., Parts, Suppliers, Production Orders).
- Customize the dashboard with manufacturing-relevant dashlets (e.g., production status, quality metrics, supply chain alerts).

## Tasks

- [ ] Research and identify key files for top bar and dashboard customizations.
  - Top bar: themes/SuiteP/tpls/_headerModuleList.tpl
  - Dashboard: modules/Home/index.php and themes/SuiteP/include/MySugar/tpls/MySugar.tpl

- [ ] Set up manufacturing customization directory structure as per ideas.md.
  - Create custom/industries/manufacturing/ with subdirs: modules/, templates/, workflows/, themes/, compliance/

- [ ] Define manufacturing-specific modules.
  - Create MF_Parts module.
  - Create MF_Suppliers module.
  - Create MF_ProductionOrders module.
  - Implement basic bean classes (e.g., MF_Part.php extending SugarBean).

- [x] Customize the top navigation bar for manufacturing.
  - Added Manufacturing tab group to custom/include/tabConfig.php with relevant modules (Products, Contracts, Quotes, Projects, etc.).
  - Added language string LBL_TABGROUP_MANUFACTURING = 'Manufacturing' in custom/include/language/en_us.lang.php.
  - Removed Support and Collaboration tabs as requested.
  - Ensure backward compatibility for non-manufacturing users.

- [x] Simplify and customize the dashboard.
  - Created ManufacturingDashlet with placeholder metrics and SVG chart in custom/modules/Home/Dashlets/ManufacturingDashlet/.
  - Added production status, quality score, efficiency, and active orders display.
  - Included placeholder chart showing production timeline with sample data.
  - Ready for connection to real manufacturing data sources.
  - Modify MySugar.tpl to include manufacturing-themed layouts.
  - Implement dual-scale design for small vs. large manufacturers.

- [ ] Implement quality management and audit features.
  - Add audit log table for manufacturing records.
  - Implement RBAC for manufacturing roles.

- [ ] Style updates for manufacturing theme.
  - Create industrial-theme.scss with manufacturing-specific colors and icons.
