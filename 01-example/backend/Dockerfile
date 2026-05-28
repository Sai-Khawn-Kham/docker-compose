FROM php:8.2-apache

# Install the PDO MySQL driver
RUN docker-php-ext-install pdo pdo_mysql

# Suppress the Apache ServerName warning globally
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf