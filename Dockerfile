FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install zip

# Enable Apache modules
RUN a2enmod rewrite

# Copy application files (excluding node_modules and development files)
COPY index.php topMenu.php footer.php script.php html_head.php /var/www/html/
COPY components/ /var/www/html/components/
COPY images/ /var/www/html/images/
COPY public/css/ /var/www/html/public/css/

# Set permissions
RUN chown -R www-data:www-data /var/www/html
