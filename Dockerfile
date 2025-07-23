# SuiteCRM Docker Image
FROM php:7.4-apache

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    libzip-dev \
    libcurl4-openssl-dev \
    libc-client-dev \
    libkrb5-dev \
    libldap2-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libssl-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions (simplified to avoid architecture issues)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-configure ldap --with-libdir=lib/$(uname -m)-linux-gnu \
    && docker-php-ext-install \
        pdo_mysql \
        mysqli \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        zip \
        curl \
        imap \
        ldap \
        soap \
        intl \
        gettext

# Enable Apache modules
RUN a2enmod rewrite

# Copy PHP configuration
COPY docker/php/php.ini /usr/local/etc/php/php.ini

# Copy Apache configuration
COPY docker/apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy cleanup script
COPY docker/scripts/pre-install-cleanup.sh /usr/local/bin/pre-install-cleanup.sh
RUN chmod +x /usr/local/bin/pre-install-cleanup.sh

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . /var/www/html/

# Create startup script that runs cleanup before Apache
RUN echo '#!/bin/bash\n\
echo "Starting SuiteCRM container..."\n\
\n\
# Run pre-installation cleanup\n\
/usr/local/bin/pre-install-cleanup.sh\n\
\n\
# Start Apache in foreground\n\
exec apache2-foreground' > /usr/local/bin/docker-entrypoint.sh \
    && chmod +x /usr/local/bin/docker-entrypoint.sh

# Expose port 80
EXPOSE 80

# Use custom entrypoint
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"] 