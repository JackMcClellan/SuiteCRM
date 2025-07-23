# SuiteCRM 7.x Docker Development Setup

This document provides instructions for running SuiteCRM 7.x (legacy) using Docker for development purposes.

**Note**: This setup mounts your local SuiteCRM 7.x codebase into a pre-built PHP 7.4 + Apache + MySQL 8.0 environment, allowing you to make changes locally and see them immediately in the browser. Your import error display fixes are already in place!

## Quick Start

### 1. Pull Docker Images
```bash
docker-compose pull
```

### 2. Start the Containers
```bash
docker-compose up -d
```

### 3. Check Container Status
```bash
docker-compose ps
```

## Access SuiteCRM

Once the containers are running, SuiteCRM will be available at:

- **HTTP**: http://localhost:8080

### Setup Required
On first access, you'll need to complete the SuiteCRM installation:

1. Go to http://localhost:8080
2. Follow the installation wizard
3. Use these database settings:
   - **Database Host**: `mysql`
   - **Database Name**: `suitecrm`
   - **Database User**: `suitecrm`  
   - **Database Password**: `suitecrm`

## Development Workflow

Since your local files are mounted into the container, you can:

1. **Edit files locally** - Use your favorite editor/IDE to modify SuiteCRM files
2. **See changes immediately** - Most changes (templates, CSS, PHP) are reflected without restart
3. **Clear cache if needed** - Some changes may require clearing SuiteCRM cache

### Clearing SuiteCRM Cache
If your changes aren't appearing, clear the cache:
```bash
# Access the container
docker-compose exec suitecrm bash

# Clear cache (inside container)
cd /app
rm -rf cache/smarty/templates_c/*
rm -rf cache/modules/*
rm -rf cache/themes/*
```

Or simply restart the container:
```bash
docker-compose restart suitecrm
```

## Useful Docker Commands

### View Logs
```bash
# View all container logs
docker-compose logs

# View SuiteCRM logs only
docker-compose logs suitecrm

# View MariaDB logs only
docker-compose logs mariadb

# Follow logs in real-time
docker-compose logs -f suitecrm
```

### Container Management
```bash
# Stop containers (data persists)
docker-compose down

# Stop containers and remove volumes (removes all data)
docker-compose down -v

# Restart containers
docker-compose restart

# Restart specific service
docker-compose restart suitecrm
```

### Database Access
```bash
# Access MariaDB shell
docker-compose exec mariadb mysql -u suitecrm -p
# Password: suitecrm_password
```

### Reset Everything
```bash
# Stop containers and remove all data
docker-compose down -v

# Remove any orphaned containers
docker system prune

# Start fresh
docker-compose up -d
```

### Check Container Health
```bash
# View container status
docker-compose ps

# View system resources
docker stats

# View container details
docker-compose logs --tail=50 suitecrm
```