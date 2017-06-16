FROM richarvey/nginx-php-fpm:latest

# COPY php.ini /usr/local/etc/php/
# RUN apt-get update \
#   && apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng12-dev libmcrypt-dev \
#   && docker-php-ext-install pdo_mysql mysqli mbstring gd iconv mcrypt

COPY docker-vars.ini /usr/local/etc/php/conf.d/docker-vars.ini
COPY nginx/default.conf /etc/nginx/sites-enabled/default.conf 
