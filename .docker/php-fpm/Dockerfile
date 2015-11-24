FROM php:5.6-fpm
MAINTAINER Hao Luo <howlowck@gmail.com>

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libxml2-dev

RUN docker-php-ext-install pdo_mysql mbstring

RUN docker-php-ext-configure xml --with-libxml-dir=/usr/include/ \
    && docker-php-ext-install xml

COPY php.ini /usr/local/etc/php/

COPY entrypoint.sh /sbin/php-fpm/