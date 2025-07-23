# SuiteCRM Directory Layout and Feature Locations

This document provides a detailed overview of the SuiteCRM directory structure. SuiteCRM is an open-source Customer Relationship Management (CRM) system built primarily in PHP, with JavaScript (including jQuery) for frontend interactions. As a monolithic repository (mono repo), it contains all core code, modules, libraries, and assets in a single codebase. This structure allows for easy customization and extension while maintaining a centralized architecture.

The layout is organized into root-level directories and files that handle core functionality, modules, APIs, utilities, and more. Below, we'll break down the main directories, their purposes, and where you might find specific features like user authentication, API endpoints, module customizations, UI components, and database interactions.

## Root-Level Overview
- **Core PHP Files**: Files like `cron.php` (for scheduled tasks), `composer.json` (dependency management), and `index.php` (entry point) are at the root. These handle bootstrapping, dependencies, and background processes.
- **Configuration and Setup**: Files like `codacy.yml` (code quality) and `codeception.dist.yml` (testing config) support development workflows.
- **Untracked/Custom Folders**: `_docs/` (documentation, like this file) and `.cursor/` (IDE-specific) are often untracked in Git.

## Main Directories and Their Purposes

### Api/
This directory contains API-related code, focusing on RESTful and other interfaces.
- **Core/**: Core API logic, including PHP files for API handling and subdirectories for specific features.
- **docs/**: API documentation.
- **V8/**: Version 8 API endpoints, with subdirectories for controllers, models, etc.
- **Where to Find Features**:
  - API endpoints for modules (e.g., user login): Look in `V8/` subdirs like controllers or modules.
  - Integration with external services: API handlers here.

### custom/
For custom themes, modules, extensions, and overrides. This is where users add custom code without modifying core files.
- **Where to Find Features**:
  - Custom module fields or views: Subdirectories mirroring core structure (e.g., `custom/modules/Accounts/`).
  - Theme customizations: Often in `custom/themes/`.

### data/
Handles data models, relationships, and object management.
- **Relationships/**: PHP files defining entity relationships (e.g., one-to-many).
- **BeanFactory.php**, **Link.php**, etc.: Core data abstraction layers.
- **Where to Find Features**:
  - Database entity relationships: In `Relationships/` files.
  - Object loading/caching: `BeanFactory.php` for module beans.

### include/
A large directory with utilities, views, templates, and core libraries.
- **Dashlets/**, **DetailView/**, **EditView/**, **ListView/**: UI components for dashboards and views.
- **database/**: Database drivers and query handlers.
- **javascript/**: jQuery and custom JS files, with subdirs for libraries like TinyMCE.
- **language/**: Localization files.
- **MVC/**: Model-View-Controller framework components.
- **Smarty/**: Templating engine.
- **Sugarpdf/**, **tcpdf/**: PDF generation.
- **utils/**: Helper functions (e.g., encryption, file handling).
- **Where to Find Features**:
  - UI rendering (e.g., forms, lists): In view-specific subdirs like `EditView/` or `ListView/`.
  - JavaScript/jQuery interactions: `javascript/` for scripts like form validation or AJAX calls.
  - Database queries: `database/` for connection and query logic.
  - Localization: `language/` for multi-language support.
  - PDF exports: `Sugarpdf/` or `tcpdf/`.

### install/
Installation scripts and setup.
- **suite_install/**: PHP files for installer steps.
- **seed_data/**: Initial database seeding.
- **Where to Find Features**:
  - Setup wizards: Main installer logic here.
  - Database configuration: `dbConfig_a.php`.

### jssource/
JavaScript source files and minification tools.
- **src_files/**: Raw JS sources organized by category.
- **minify.php**: Tools for compressing JS.
- **Where to Find Features**:
  - Unminified JS code: `src_files/` for editing core scripts.
  - Frontend build processes: Minification scripts.

### lib/
Modern libraries and utilities.
- **API/**: API abstractions.
- **Search/**: Search engine integrations (e.g., Elasticsearch).
- **Utility/**: General helpers.
- **Where to Find Features**:
  - Advanced search: `Search/` subdirs.
  - Exception handling: `Exception/`.

### metadata/
Defines module metadata like relationships and fields.
- Numerous `MetaData.php` files (e.g., `accounts_contactsMetaData.php`).
- **Where to Find Features**:
  - Module field definitions: Specific MetaData files for each module relationship.

### ModuleInstall/
Tools for installing and managing modules.
- **PackageManager/**: Handles module packages.
- **Where to Find Features**:
  - Module installation: `ModuleInstaller.php`.

### modules/
The heart of SuiteCRM – individual modules for CRM features.
- Each subdirectory is a module (e.g., `Accounts/`, `Contacts/`, `Campaigns/`).
- Inside each: PHP controllers, views (tpl, php), JS, metadata, and subdirs like `views/` or `language/`.
- Examples:
  - **Accounts/**: Account management.
  - **Users/**: User authentication and profiles (not explicitly listed but typically here).
  - **ACL/**: Access Control Lists.
  - **AOS_**/AOR_**/AOW_**: Advanced Open modules (e.g., invoicing, reporting, workflows).
  - **Emails/**, **Calendar/**: Communication and scheduling.
- **Where to Find Features**:
  - User management/authentication: `Users/` (login, roles in `ACLRoles/`).
  - CRM entities (leads, opportunities): Respective module dirs like `Leads/`, `Opportunities/`.
  - Workflows/Automation: `AOW_WorkFlow/`.
  - Reporting: `AOR_Reports/`.
  - Email integration: `Emails/`, `EmailMan/`.

### service/
Service-oriented code, often for APIs or background services.
- Subdirs for specific services.
- **Where to Find Features**:
  - Background jobs: Service handlers.

### soap/
Legacy SOAP API implementations.
- PHP files for SOAP endpoints.
- **Where to Find Features**:
  - Older integrations: SOAP-based APIs.

### tests/
Unit and integration tests.
- Codeception configs and test files.
- **Where to Find Features**:
  - Testing code: Organized by category.

### themes/
UI themes.
- Subdirs for different themes (e.g., default).
- **Where to Find Features**:
  - Styling and layouts: Theme-specific CSS, images, templates.

### upload/
User-uploaded files.
- **Where to Find Features**:
  - File attachments: Stored here.

### Other Directories
- **XTemplate/**: Legacy templating.
- **Zend/**: Zend Framework components (e.g., for MVC).
- **soap/**: As mentioned.

## General Tips for Finding Features
- **Authentication/Security**: Check `modules/Users/`, `include/utils/security.php`, or `ACL/` for roles.
- **Database Operations**: `data/`, `include/database/`, and module-specific vars.
- **Frontend (jQuery/JS)**: `include/javascript/`, `jssource/`, or module JS files.
- **API/Integrations**: `Api/`, `service/`, `soap/`.
- **Customizations**: Always prefer `custom/` to avoid core modifications.
- **Documentation**: `_docs/` (this folder) for guides like this.
- **Extensions/Modules**: Use `ModuleInstall/` to add new ones.

This structure supports SuiteCRM's modular, extensible design. For mono repo best practices, keep custom code in `custom/` and use Composer for dependencies. If adding features, follow the module pattern in `modules/`.

Last updated: [Insert Date] 