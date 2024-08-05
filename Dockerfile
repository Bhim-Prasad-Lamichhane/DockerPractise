FROM php:7.4-apache

# Install required PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache rewrite module
RUN a2enmod rewrite

WORKDIR /var/www/html/

COPY . /var/www/html/

CMD ["apache2-foreground"]
