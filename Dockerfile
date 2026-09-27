FROM php:8.1-apache
RUN apt-get update && apt-get install -y libcurl4-openssl-dev \
    && docker-php-ext-install curl \
    && a2enmod rewrite
RUN sed -i 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf
COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html
EXPOSE 80