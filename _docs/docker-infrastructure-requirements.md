# SuiteCRM Docker Infrastructure Requirements

This document outlines the complete Docker infrastructure requirements for running SuiteCRM in a containerized environment, including all necessary services, configurations, and implementation steps.

## Overview

SuiteCRM requires a multi-service Docker architecture with the following core components:
- Web Server (Apache/Nginx) with PHP runtime
- Database (MySQL/MariaDB)
- Optional search engine (Elasticsearch)
- Optional caching layer (Redis/Memcached)
- Optional email services for development

## Infrastructure Planning Checklist

### Core Service Requirements

#### Web Server Setup
- [ ] Choose web server (Apache recommended due to existing .htaccess configurations)
- [ ] Configure PHP runtime environment (PHP >= 7.4.0)
- [ ] Install required PHP extensions
- [ ] Set up proper PHP configuration limits
- [ ] Configure SSL/HTTPS support for API v8 requirements
- [ ] Set up URL rewriting rules
- [ ] Configure file upload handling

#### Database Service Setup
- [ ] Choose database system (MySQL 5.7+/MariaDB recommended)
- [ ] Create database container with proper version
- [ ] Configure database user with appropriate privileges
- [ ] Set up database persistence volumes
- [ ] Configure database connection parameters
- [ ] Set up database initialization scripts
- [ ] Configure database charset and collation (UTF-8/utf8mb4_general_ci)

#### PHP Configuration Requirements
- [ ] Memory limit: >= 256M (512M recommended)
- [ ] Upload max filesize: >= 6MB
- [ ] Post max size: >= 8MB
- [ ] Max execution time: >= 120 seconds
- [ ] Session configuration
- [ ] Error reporting settings
- [ ] Timezone configuration

### Required PHP Extensions Checklist
- [ ] `curl` - for HTTP requests and external API calls
- [ ] `gd` - for image processing and manipulation
- [ ] `json` - for JSON data handling
- [ ] `openssl` - for SSL/TLS encryption
- [ ] `zip` - for file compression/decompression
- [ ] `mysqli` or `mysql` - for database connectivity
- [ ] `xml` - for XML parsing
- [ ] `mbstring` - for multi-byte string handling

### Recommended PHP Extensions Checklist
- [ ] `imap` - for email functionality and campaigns
- [ ] `ldap` - for LDAP authentication integration
- [ ] `soap` - for web services functionality
- [ ] `pcre` - for regular expressions (usually included)
- [ ] `zlib` - for compression support

## Optional Services Planning

### Elasticsearch Setup (Advanced Search)
- [ ] Evaluate need for advanced search capabilities
- [ ] Set up Elasticsearch 7.13+ container
- [ ] Configure Elasticsearch memory settings
- [ ] Set up data persistence for search indices
- [ ] Configure SuiteCRM to connect to Elasticsearch
- [ ] Plan for search index initialization

### Redis/Memcached Setup (Caching)
- [ ] Evaluate caching requirements
- [ ] Choose caching solution (Redis recommended)
- [ ] Set up caching service container
- [ ] Configure session storage in cache
- [ ] Set up cache persistence (if needed)
- [ ] Configure SuiteCRM cache settings

### Email Services Setup
- [ ] Determine email requirements (SMTP outbound, IMAP inbound)
- [ ] Set up SMTP service for outbound emails
- [ ] Configure IMAP service for inbound email processing
- [ ] Set up MailHog for development/testing (optional)
- [ ] Configure email authentication (OAuth2 if needed)

## File System and Persistence Planning

### Critical Persistent Volume Mounts
- [ ] `/var/www/html/config.php` - Main configuration file
- [ ] `/var/www/html/custom/` - Custom modules and configurations
- [ ] `/var/www/html/cache/` - Application cache directory
- [ ] `/var/www/html/modules/` - Module data and customizations
- [ ] `/var/www/html/upload/` - File uploads and attachments
- [ ] `/var/www/html/logs/` - Application logs
- [ ] `/var/www/html/themes/` - Custom themes (if applicable)

### File Permissions Setup
- [ ] Set appropriate ownership for web server user (www-data)
- [ ] Configure write permissions for cache directory
- [ ] Configure write permissions for upload directory
- [ ] Configure write permissions for logs directory
- [ ] Configure write permissions for config.php
- [ ] Set secure permissions for sensitive files

## Docker Compose Architecture Planning

### Container Services Definition
- [ ] Define SuiteCRM application container
- [ ] Define MySQL/MariaDB database container
- [ ] Define Elasticsearch container (optional)
- [ ] Define Redis container (optional)
- [ ] Define email service containers (optional)

### Network Configuration
- [ ] Create isolated Docker network for services
- [ ] Configure service discovery between containers
- [ ] Set up proper port mappings
- [ ] Configure external access points
- [ ] Plan for SSL termination

### Environment Variables Planning
- [ ] Database connection parameters
- [ ] SuiteCRM site URL configuration
- [ ] Admin user credentials
- [ ] Email service configurations
- [ ] Search service configurations
- [ ] Security keys and secrets

## Security Implementation Checklist

### SSL/HTTPS Configuration
- [ ] Generate SSL certificates for HTTPS
- [ ] Configure web server for SSL termination
- [ ] Set up HTTP to HTTPS redirects
- [ ] Configure secure headers
- [ ] Validate SSL certificate chain

### Database Security
- [ ] Create dedicated database user with limited privileges
- [ ] Use Docker secrets for database passwords
- [ ] Configure database to only accept connections from application
- [ ] Set up database backup strategy
- [ ] Enable database logging if required

### Application Security
- [ ] Configure proper file permissions
- [ ] Set up security headers in web server
- [ ] Configure session security settings
- [ ] Set up proper error handling to avoid information disclosure
- [ ] Configure input validation and sanitization

## Development vs Production Planning

### Development Environment
- [ ] Set up development-specific environment variables
- [ ] Configure debug logging
- [ ] Set up development email catching (MailHog)
- [ ] Configure development SSL certificates
- [ ] Set up hot-reload capabilities (if applicable)

### Production Environment
- [ ] Plan for horizontal scaling capabilities
- [ ] Set up proper logging aggregation
- [ ] Configure production-grade SSL certificates
- [ ] Plan backup and disaster recovery
- [ ] Set up monitoring and alerting
- [ ] Configure proper resource limits

## Port Configuration Planning

### Standard Port Assignments
- [ ] HTTP: 80 (internal) / 8080 (external mapping)
- [ ] HTTPS: 443 (internal) / 8443 (external mapping)
- [ ] MySQL: 3306 (internal network only)
- [ ] Elasticsearch: 9200 (internal network only)
- [ ] Redis: 6379 (internal network only)

### Custom Port Considerations
- [ ] Plan for custom external port mappings
- [ ] Avoid port conflicts with existing services
- [ ] Configure firewall rules for exposed ports
- [ ] Document port usage for team reference

## Performance Optimization Planning

### Resource Allocation
- [ ] Plan CPU allocation for each service
- [ ] Plan memory allocation for each service
- [ ] Configure swap settings if needed
- [ ] Plan storage I/O requirements
- [ ] Set up resource monitoring

### Caching Strategy
- [ ] Configure PHP OPcache settings
- [ ] Set up application-level caching
- [ ] Configure database query caching
- [ ] Plan for static asset caching
- [ ] Set up CDN integration (if applicable)

## Monitoring and Logging Setup

### Application Logging
- [ ] Configure SuiteCRM log levels
- [ ] Set up log rotation
- [ ] Plan for log aggregation
- [ ] Configure error tracking
- [ ] Set up performance monitoring

### Infrastructure Monitoring
- [ ] Set up container health checks
- [ ] Configure resource usage monitoring
- [ ] Set up database monitoring
- [ ] Configure service availability monitoring
- [ ] Plan for alerting and notifications

## Backup and Recovery Planning

### Data Backup Strategy
- [ ] Plan database backup frequency
- [ ] Configure automated database backups
- [ ] Set up file system backup for uploads
- [ ] Plan for configuration backup
- [ ] Test backup restoration procedures

### Disaster Recovery
- [ ] Plan for service recovery procedures
- [ ] Document recovery time objectives (RTO)
- [ ] Document recovery point objectives (RPO)
- [ ] Create disaster recovery runbooks
- [ ] Test disaster recovery procedures

## Implementation Phases

### Phase 1: Core Infrastructure
- [ ] Set up basic Docker Compose structure
- [ ] Configure web server and PHP environment
- [ ] Set up database service
- [ ] Configure basic networking
- [ ] Test basic SuiteCRM installation

### Phase 2: Enhanced Services
- [ ] Add Elasticsearch for search (if required)
- [ ] Set up caching layer (if required)
- [ ] Configure email services
- [ ] Implement SSL/HTTPS
- [ ] Configure monitoring and logging

### Phase 3: Production Hardening
- [ ] Implement security best practices
- [ ] Set up backup and recovery
- [ ] Configure performance optimizations
- [ ] Implement monitoring and alerting
- [ ] Create deployment documentation

### Phase 4: Testing and Validation
- [ ] Test all service interactions
- [ ] Validate backup and recovery procedures
- [ ] Perform security testing
- [ ] Conduct performance testing
- [ ] Create operational documentation

## Reference Information

### Existing Docker Solutions
- **SuiteCRM 8**: `jontitmus-code/SuiteCRM8_docker` (Modern implementation)
- **SuiteCRM 7.x**: `Spantree/docker-suitecrm` (Multi-version support)
- **Alternative**: `liteart/docker-suitecrm` (Build scripts and examples)

### Key Configuration Files
- `composer.json` - PHP dependencies and requirements
- `config.php` - Main SuiteCRM configuration
- `.htaccess` - Web server URL rewriting rules
- Database managers in `include/database/` - Database abstraction layer

### System Requirements Reference
- **PHP Version**: >= 7.4.0 (from composer.json platform requirement)
- **Database**: MySQL/MariaDB, MS SQL Server supported
- **Web Server**: Apache (recommended), Nginx (alternative)
- **Memory**: 256M minimum, 512M recommended
- **Storage**: Plan for growth based on expected usage

This comprehensive checklist ensures all aspects of the SuiteCRM Docker infrastructure are properly planned and implemented. 