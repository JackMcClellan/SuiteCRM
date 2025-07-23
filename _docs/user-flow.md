# SuiteCRM User Flow Documentation

This document defines the user journey through different segments of the SuiteCRM application for the specified user types. It serves as a guide for building project architecture and UI elements.

## Overview

SuiteCRM follows a modular navigation structure with the following main components:
- **Top Navigation Tabs**: Core modules accessible from header (Home, Calendar, Calls, Meetings, Tasks, Leads, Contacts, Accounts, Opportunities, Emails, Campaigns, etc.)
- **Module-Specific Actions**: Create, List, Edit, Detail, Import actions per module
- **Admin Panel**: System configuration and management tools

## User Types & Core Modules

### Sales Representatives
- **Primary Modules**: Leads, Contacts, Accounts, Opportunities, Calls, Meetings, Tasks, Calendar
- **Secondary Modules**: Emails, Documents, Notes

### Sales Managers  
- **Primary Modules**: All Sales Rep modules + AOR_Reports, AOR_Charts, Campaigns
- **Secondary Modules**: Project management, User management

### System Administrators
- **Primary Modules**: Administration, Users, ACLRoles, SecurityGroups
- **Secondary Modules**: All business modules for configuration and oversight

---

## 1. Lead Management Flow

### 1.1 Sales Representative: New Lead Creation
**Navigation**: Home → Leads Tab → Create New Lead
**Pages Traversed**:
1. `index.php?module=Home&action=index` (Dashboard)
2. `index.php?module=Leads&action=index` (Leads List View)
3. `index.php?module=Leads&action=EditView` (Create Lead Form)
4. `index.php?module=Leads&action=DetailView&record={id}` (Lead Detail Page)

**Key Actions**:
- Fill lead information (name, company, phone, email, lead source)
- Assign to user
- Set status (New/Assigned/In Process/etc.)
- Save and view created lead

### 1.2 Sales Representative: Lead Qualification & Management  
**Navigation**: Leads Tab → Select Lead → Detail View
**Pages Traversed**:
1. `index.php?module=Leads&action=index` (Leads List View)
2. `index.php?module=Leads&action=DetailView&record={id}` (Lead Detail)
3. `index.php?module=Leads&action=EditView&record={id}` (Edit Lead)
4. `index.php?module=Calls&action=EditView` (Schedule Follow-up Call)
5. `index.php?module=Meetings&action=EditView` (Schedule Meeting)

**Key Actions**:
- Review lead details and notes
- Update lead status
- Schedule follow-up activities (calls, meetings, tasks)
- Add notes about interactions
- Qualify lead for conversion

### 1.3 Sales Representative: Lead Conversion Process
**Navigation**: Lead Detail → Convert Lead Button
**Pages Traversed**:
1. `index.php?module=Leads&action=DetailView&record={id}` (Lead Detail)
2. `index.php?module=Leads&action=ConvertLead&record={id}` (Conversion Form)
3. Multiple result pages:
   - `index.php?module=Contacts&action=DetailView&record={contact_id}` (New Contact)
   - `index.php?module=Accounts&action=DetailView&record={account_id}` (New Account) 
   - `index.php?module=Opportunities&action=DetailView&record={opp_id}` (New Opportunity)

**Key Actions**:
- Select conversion options (Create Contact, Account, Opportunity)
- Map lead data to new records
- Handle activity transfers (copy vs move)
- Complete conversion process
- Access newly created records

### 1.4 Sales Manager: Lead Pipeline Analysis
**Navigation**: Home → Leads Tab → Advanced Search/Reports
**Pages Traversed**:
1. `index.php?module=Home&action=index` (Dashboard)
2. `index.php?module=Leads&action=index` (Leads List View)
3. Advanced search filtering
4. `index.php?module=AOR_Reports&action=index` (Reports List)
5. `index.php?module=AOR_Reports&action=DetailView&record={id}` (Lead Pipeline Report)

**Key Actions**:
- Filter leads by status, source, assigned user
- View conversion rates and metrics
- Access lead performance reports
- Monitor team lead management activities

---

## 2. Reporting & Analytics Flow

### 2.1 Sales Manager: Report Creation
**Navigation**: Home → Reports Tab → Create Report
**Pages Traversed**:
1. `index.php?module=Home&action=index` (Dashboard)
2. `index.php?module=AOR_Reports&action=index` (Reports List View)
3. `index.php?module=AOR_Reports&action=EditView` (Create Report Form)
4. Module field selection interface
5. Conditions configuration interface
6. `index.php?module=AOR_Reports&action=DetailView&record={id}` (Report Results)

**Key Actions**:
- Select report module (Leads, Opportunities, Accounts, etc.)
- Choose display fields and their order
- Set report conditions and filters
- Configure grouping and sorting
- Add charts if needed
- Save and run report

### 2.2 Sales Manager: Report Analysis & Export
**Navigation**: Reports Tab → Select Report → View Results
**Pages Traversed**:
1. `index.php?module=AOR_Reports&action=index` (Reports List)
2. `index.php?module=AOR_Reports&action=DetailView&record={id}` (Report Detail & Results)
3. Export actions:
   - CSV export
   - PDF download
4. `index.php?module=ProspectLists&action=index` (Target Lists - if adding to prospect list)

**Key Actions**:
- Review report data and charts
- Apply dynamic filters and parameters
- Export to CSV or PDF
- Add report results to target lists
- Schedule automated report delivery

### 2.3 System Administrator: Report Dashboard Configuration
**Navigation**: Home → Dashboard Configuration
**Pages Traversed**:
1. `index.php?module=Home&action=index` (Dashboard)
2. Dashboard add dashlet interface
3. AOR Reports dashlet configuration
4. User role and permissions configuration

**Key Actions**:
- Add reports to dashboards as dashlets
- Configure chart displays
- Set user access permissions for reports
- Create executive dashboards

---

## 3. Campaign Management Flow

### 3.1 Sales Manager: Campaign Creation
**Navigation**: Home → Campaigns Tab → Create Campaign
**Pages Traversed**:
1. `index.php?module=Home&action=index` (Dashboard)
2. `index.php?module=Campaigns&action=index` (Campaigns List)
3. `index.php?module=Campaigns&action=WizardHome` (Campaign Wizard Home)
4. Campaign type selection interface
5. Campaign details form
6. `index.php?module=Campaigns&action=DetailView&record={id}` (Campaign Overview)

**Key Actions**:
- Choose campaign type (Email, Web, Print, etc.)
- Set campaign name, dates, budget
- Define campaign objectives and content
- Configure campaign status and ownership
- Save initial campaign structure

### 3.2 Sales Manager: Email Marketing Setup
**Navigation**: Campaign Detail → Marketing Tab → Create Email Marketing
**Pages Traversed**:
1. `index.php?module=Campaigns&action=DetailView&record={id}` (Campaign Detail)
2. `index.php?module=Campaigns&action=WizardMarketing&campaign_id={id}` (Marketing Wizard)
3. `index.php?module=EmailTemplates&action=index` (Template Selection)
4. `index.php?module=EmailTemplates&action=EditView` (Template Creation/Edit)
5. Email marketing configuration interface

**Key Actions**:
- Select or create email templates
- Configure email marketing settings
- Set send dates and timing
- Define from/reply-to addresses
- Configure tracking parameters

### 3.3 Sales Manager: Target List Management
**Navigation**: Campaign Detail → Prospect Lists Tab
**Pages Traversed**:
1. `index.php?module=Campaigns&action=DetailView&record={id}` (Campaign Detail)
2. `index.php?module=ProspectLists&action=index` (Target Lists View)
3. `index.php?module=ProspectLists&action=EditView` (Create Target List)
4. Target list member management interface
5. `index.php?module=Import&action=Step1&import_module=ProspectLists` (Import Targets)

**Key Actions**:
- Create or select target lists
- Import contact/lead data
- Manage list memberships
- Set list types (default, exempt, test)
- Associate lists with campaign

### 3.4 Sales Manager: Campaign Execution & Tracking
**Navigation**: Campaign Detail → Send Email/Track Status
**Pages Traversed**:
1. `index.php?module=Campaigns&action=DetailView&record={id}` (Campaign Detail)
2. `index.php?module=Campaigns&action=QueueCampaign&record={id}` (Send Interface)
3. Campaign tracking and status pages
4. `index.php?module=CampaignLog&action=index` (Campaign Log/Analytics)
5. Campaign results and ROI analysis

**Key Actions**:
- Send test emails
- Queue campaign for delivery
- Monitor delivery status
- Track email opens, clicks, bounces
- Analyze campaign performance
- Generate campaign ROI reports

---

## 4. System Administration Flow

### 4.1 System Administrator: User Management
**Navigation**: Home → Administration → User Management
**Pages Traversed**:
1. `index.php?module=Home&action=index` (Dashboard)
2. `index.php?module=Administration&action=index` (Admin Panel)
3. `index.php?module=Users&action=index` (Users List)
4. `index.php?module=Users&action=EditView` (Create User)
5. `index.php?module=ACLRoles&action=index` (Role Management)
6. `index.php?module=ACLRoles&action=EditView` (Role Configuration)

**Key Actions**:
- Create new user accounts
- Assign roles and permissions
- Configure access controls
- Set user preferences and settings
- Manage password policies
- Assign users to security groups

### 4.2 System Administrator: Module Configuration
**Navigation**: Administration → Studio/Module Builder
**Pages Traversed**:
1. `index.php?module=Administration&action=index` (Admin Panel)
2. Studio module configuration interface
3. Field management interface
4. Layout configuration interface
5. Relationship management interface

**Key Actions**:
- Customize module fields
- Configure page layouts
- Manage dropdown lists
- Set up module relationships
- Configure security group access
- Deploy customizations

### 4.3 System Administrator: System Settings
**Navigation**: Administration → System Settings
**Pages Traversed**:
1. `index.php?module=Administration&action=index` (Admin Panel)
2. `index.php?module=Configurator&action=EditView` (System Settings)
3. Email configuration interfaces
4. Scheduler management interface
5. Security settings interface

**Key Actions**:
- Configure global system settings
- Set up email server settings
- Manage scheduled tasks
- Configure security policies
- Set up integrations
- Monitor system performance

---

## 5. Cross-Module Navigation Patterns

### 5.1 Common Navigation Elements
- **Main Tab Navigation**: Horizontal tabs for primary modules
- **Module Menu**: Left sidebar with module-specific actions (Create, List, Import)
- **Breadcrumbs**: Current location indicators
- **Action Menus**: Context-specific actions in Detail/List views
- **Global Search**: Header search functionality across all modules

### 5.2 Standard Page Types
- **List View** (`action=index`): Tabular data display with search/filter
- **Detail View** (`action=DetailView`): Read-only record display
- **Edit View** (`action=EditView`): Form for creating/editing records
- **Import** (`action=Step1`): Data import wizards

### 5.3 Relationship Navigation
- **SubPanels**: Related record lists within Detail views
- **Popup Selectors**: Modal windows for relating records
- **Inline Editing**: Quick edit capabilities within List views
- **Related Record Links**: Navigation between associated records

---

## 6. Mobile/Responsive Considerations

### 6.1 Current Desktop Navigation
- Fixed header with collapsible module tabs
- Sidebar navigation for module-specific actions
- Responsive tables with horizontal scrolling
- Modal dialogs for quick actions

### 6.2 Touch-Friendly Elements
- Large click targets for mobile interaction
- Swipe gestures for navigation (limited implementation)
- Responsive form layouts
- Mobile-optimized search interfaces

---

This user flow documentation provides the foundation for understanding how users navigate through SuiteCRM's current interface structure. Each flow represents the typical page progression and key decision points users encounter when performing core business functions within the CRM system. 