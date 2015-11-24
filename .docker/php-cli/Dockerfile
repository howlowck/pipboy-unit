FROM php:5.6-cli
MAINTAINER Hao Luo <howlowck@gmail.com>

RUN apt-get update
RUN apt-get upgrade -y

COPY php.ini /usr/local/etc/php/

RUN DEBIAN_FRONTEND=noninteractive apt-get install -y \
     libfreetype6-dev \
     libjpeg62-turbo-dev \
     libmcrypt-dev \
     libpng12-dev \
     libbz2-dev \
     libssh2-1 \
     libssh2-1-dev \
     php5-mysqlnd \
     git \
     && rm -r /var/lib/apt/lists/*

RUN docker-php-ext-install mcrypt zip bz2 mbstring pdo_mysql \
     && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jp \
     && docker-php-ext-install gd

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer