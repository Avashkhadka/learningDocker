FROM php:8.2-apache

# Install PHP database extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache modules
RUN a2enmod rewrite ssl

# Copy Apache configuration
COPY apache/000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy SSL certificates
COPY apache/ssl/ /etc/apache2/ssl/

# Copy PHP application
COPY php/ /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html/

# HTTP and HTTPS
EXPOSE 80
EXPOSE 443