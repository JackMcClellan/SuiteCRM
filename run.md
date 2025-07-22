# SuiteCRM Docker Setup

This document provides instructions for running SuiteCRM using Docker with the official Bitnami images.

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
- **HTTPS**: https://localhost:8443

### Default Login Credentials
- **Username**: `admin`
- **Password**: `bitnami123`
- **Email**: `admin@example.com`

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