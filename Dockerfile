FROM php:7.4-apache

# Instalar extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql && docker-php-enable mysqli

RUN a2enmod rewrite

WORKDIR /var/www/html
