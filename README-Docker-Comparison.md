# SuiteCRM Docker Comparison Setup

This setup allows you to run both your **modified SuiteCRM** (with manufacturing features) and the **official SuiteCRM** simultaneously for comparison purposes.

## 🚀 Quick Start

### Modified SuiteCRM (Your Enhanced Version)
```bash
# Start your modified version with manufacturing features
docker-compose up -d

# Access at: http://localhost:8080
```

### Official SuiteCRM (Vanilla Version)
```bash
# Start the official SuiteCRM version
docker-compose -f docker-compose-official.yml up -d

# Access at: http://localhost:8082
```

### Both Running Simultaneously
```bash
# Start both environments at once
docker-compose up -d
docker-compose -f docker-compose-official.yml up -d

# Modified version: http://localhost:8080
# Official version:  http://localhost:8082
```

## 📊 Comparison Overview

| Feature | Modified SuiteCRM (Port 8080) | Official SuiteCRM (Port 8081) |
|---------|-------------------------------|--------------------------------|
| **Manufacturing Dashboard** | ✅ Advanced Manufacturing Overview Dashlet | ❌ Standard dashlets only |
| **Production Tracking** | ✅ Enhanced Opportunities with production planning | ❌ Standard opportunities |
| **Inventory Monitoring** | ✅ Automated threshold notifications in Products | ❌ Basic product management |
| **Quality Control** | ✅ Comprehensive QC subpanel in Cases | ❌ Standard case management |
| **Supplier Analytics** | ✅ Performance dashboards in Quotes | ❌ Basic quote functionality |
| **KPI Calculator** | ✅ Manufacturing KPI calculator in Reports | ❌ Standard reporting only |
| **Manufacturing Tab** | ✅ Focused manufacturing modules tab | ❌ Standard module tabs |

## 🔧 Management Commands

### Starting Services
```bash
# Start modified version only
docker-compose up -d

# Start official version only
docker-compose -f docker-compose-official.yml up -d

# Start both versions
docker-compose up -d && docker-compose -f docker-compose-official.yml up -d
```

### Stopping Services
```bash
# Stop modified version
docker-compose down

# Stop official version
docker-compose -f docker-compose-official.yml down

# Stop both versions
docker-compose down && docker-compose -f docker-compose-official.yml down
```

### Viewing Logs
```bash
# Modified version logs
docker-compose logs -f

# Official version logs
docker-compose -f docker-compose-official.yml logs -f
```

### Database Access
```bash
# Modified version database
docker exec -it suitecrm_mysql mysql -u suitecrm -psuitecrm_password suitecrm

# Official version database
docker exec -it suitecrm_official_mysql mysql -u suitecrm_official -psuitecrm_official_password suitecrm_official
```

## 🌐 Access URLs

- **Modified SuiteCRM**: http://localhost:8080
  - Database: `suitecrm_mysql` container
  - Network: `suitecrm_network`
  
- **Official SuiteCRM**: http://localhost:8082  
  - Database: `suitecrm_official_mysql` container
  - Network: `suitecrm_official_network`

## 🔍 Demo Scenarios

### 1. Compare Dashboards
1. Access both URLs side by side
2. In modified version: Add "Manufacturing Overview Dashlet" 
3. In official version: Notice only standard dashlets available

### 2. Compare Opportunities Module
1. Modified (8080): Navigate to Opportunities → See Production Planning panels
2. Official (8082): Navigate to Opportunities → See standard opportunity fields only

### 3. Compare Products Module
1. Modified (8080): Products → See Inventory Monitoring with threshold alerts
2. Official (8082): Products → See basic product information only

### 4. Compare Cases Module
1. Modified (8080): Cases → See Quality Control subpanel with batch tracking
2. Official (8082): Cases → See standard case management only

### 5. Compare Reports Module
1. Modified (8080): Reports → Create report with "Is KPI Calculator" option
2. Official (8082): Reports → See standard report creation only

## 🗂️ Container Architecture

```
Modified SuiteCRM Environment:
├── suitecrm_app (port 8080)
├── suitecrm_mysql
├── suitecrm_network
└── mysql_data volume

Official SuiteCRM Environment:
├── suitecrm_official_app (port 8082)
├── suitecrm_official_mysql  
├── suitecrm_official_network
└── mysql_official_data volume
```

## 🛠️ Troubleshooting

### Port Conflicts
If you get port conflicts, you can change the ports in the docker-compose files:
```yaml
ports:
  - '8083:80'  # Change 8082 to 8083 or any available port
```

### Container Name Conflicts
All containers have unique names to avoid conflicts:
- Modified: `suitecrm_app`, `suitecrm_mysql`
- Official: `suitecrm_official_app`, `suitecrm_official_mysql`

### Reset Official Environment
```bash
# Stop and remove official containers/volumes
docker-compose -f docker-compose-official.yml down -v
docker-compose -f docker-compose-official.yml up -d
```

### Check Running Containers
```bash
docker ps
# Should show both suitecrm_app and suitecrm_official_app running
```

## 📝 Initial Setup (Official Version)

When you first access http://localhost:8082, you'll need to complete the SuiteCRM installation:

1. **Database Configuration**:
   - Database Type: `MySQL`
   - Host Name: `mysql-official`
   - Database Name: `suitecrm_official`
   - User Name: `suitecrm_official`
   - Password: `suitecrm_official_password`
   - Port: `3306` (internal container port)

2. **Admin User**: Create your admin account

3. **Complete Installation**: Follow the setup wizard

The modified version should already be configured and ready to use at http://localhost:8080. 