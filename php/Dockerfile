FROM php:8.2-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY . /var/www/html

# Establece los permisos adecuados
RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 755 /var/www/html

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Configura PHP para permitir cargas de archivos
RUN echo "file_uploads = On" >> /usr/local/etc/php/conf.d/uploads.ini
RUN echo "upload_max_filesize = 20M" >> /usr/local/etc/php/conf.d/uploads.ini
RUN echo "post_max_size = 20M" >> /usr/local/etc/php/conf.d/uploads.ini