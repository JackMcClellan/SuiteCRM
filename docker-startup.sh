#!/bin/bash

# SuiteCRM Docker Startup Script

echo "Starting SuiteCRM Docker Environment..."

# Check if .env.docker file exists
if [ ! -f .env.docker ]; then
    echo "Error: .env.docker file not found!"
    echo "Please copy .env.docker.example to .env.docker and configure it."
    exit 1
fi

# Load environment variables
export $(grep -v '^#' .env.docker | xargs)

# Clean up any problematic custom modules that reference non-existent files
echo "Cleaning up problematic custom modules..."
if [ -f "custom/Extension/application/Ext/Include/ManufacturingModules.php" ]; then
    echo "Disabling ManufacturingModules.php (references non-existent modules)"
    mv "custom/Extension/application/Ext/Include/ManufacturingModules.php" "custom/Extension/application/Ext/Include/ManufacturingModules.php.disabled"
fi

# Remove compiled extension files so they get regenerated
if [ -f "custom/application/Ext/Include/modules.ext.php" ]; then
    echo "Removing compiled modules extension file for regeneration"
    rm "custom/application/Ext/Include/modules.ext.php"
fi

# Clean up any existing config files to ensure fresh installation
if [ -f "config.php" ]; then
    echo "Backing up existing config.php to allow fresh installation"
    mv "config.php" "config.php.backup-$(date +%Y%m%d-%H%M%S)"
fi

# Build and start containers
echo "Building Docker images..."
docker-compose build

echo "Starting containers..."
docker-compose up -d

# Wait for MySQL to be ready
echo "Waiting for MySQL to be ready..."
until docker-compose exec mysql mysqladmin ping -h localhost --silent 2>/dev/null; do
    echo "Waiting for MySQL..."
    sleep 5
done

echo "MySQL is ready!"

# Fix file permissions inside the container
echo "Setting up file permissions..."
docker-compose exec suitecrm chown -R www-data:www-data /var/www/html
docker-compose exec suitecrm chmod -R 755 /var/www/html
docker-compose exec suitecrm chmod -R 777 /var/www/html/cache /var/www/html/upload /var/www/html/custom

# Create necessary directories
docker-compose exec suitecrm mkdir -p /var/www/html/cache/upload/import
docker-compose exec suitecrm chown -R www-data:www-data /var/www/html/cache/upload/import

echo ""
echo "🎉 SuiteCRM Docker Environment is ready!"
echo ""
echo "📋 Next Steps:"
echo "1. Open your browser and go to: http://localhost:8080"
echo "2. Complete the installation wizard with these database settings:"
echo "   - Database Host: mysql"
echo "   - Database Name: suitecrm"
echo "   - Database User: suitecrm"
echo "   - Database Password: suitecrm_password"
echo ""
echo "🔧 Services:"
echo "- SuiteCRM: http://localhost:8080"
echo "- MySQL: localhost:3306"
echo ""
echo "📊 Container Status:"
docker-compose ps

echo ""
echo "📝 Installation logs can be found at:"
echo "- SuiteCRM logs: docker-compose logs suitecrm"
echo "- MySQL logs: docker-compose logs mysql" 