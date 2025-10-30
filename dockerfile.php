FROM php:7.4-apache

# 1. Habilitar módulos que necesites
RUN a2enmod rewrite headers expires

# 2. Permitir .htaccess
RUN sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

# 3. Opcional: definir un ServerName para evitar warnings
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# 4. Copiar tu php.ini si lo usas
COPY php.ini /usr/local/etc/php/php.ini

# 5. Copiar tu código fuente
COPY ./app/dist /var/www/html

# 6. Ajustar permisos si es necesario
RUN chown -R www-data:www-data /var/www/html