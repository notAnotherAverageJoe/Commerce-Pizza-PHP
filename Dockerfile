# Use the official PHP image with Apache
FROM php:8.2-apache

# Install dependencies (optional)
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Enable mod_rewrite
RUN a2enmod rewrite

# Restart Apache to apply changes
RUN service apache2 restart

# Copy project files
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]