# Use PHP 8.1 Apache as base image
FROM php:8.1-apache

# Set working directory
WORKDIR /var/www/html

# Copy existing application code to the container
COPY . .

# Install any PHP extensions you might need
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80

# Start Apache server
CMD ["apache2ctl", "-D", "FOREGROUND"]