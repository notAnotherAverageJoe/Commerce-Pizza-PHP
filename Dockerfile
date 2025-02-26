# Use the official PHP image with Apache
FROM php:8.2-apache

# Install dependencies (optional)
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copy your project files into the container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 (default HTTP port)
EXPOSE 80

# Start Apache when the container runs
CMD ["apache2-foreground"]
