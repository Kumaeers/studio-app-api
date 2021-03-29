FROM php:7.3-fpm-alpine

ENV ROOT_DIR './docker/local/php-fpm'

RUN apk --no-cache update && apk --no-cache upgrade

RUN apk --no-cache add \
    libzip-dev \
    libxml2-dev \
    libpng-dev \
    gmp-dev \
    icu-dev \
    autoconf \
    make \
    gcc \
    g++ \
    zip \
    unzip

RUN docker-php-ext-install \
    zip \
    pdo_mysql \
    soap \
    intl \
    gd

COPY ${ROOT_DIR}/php.ini /usr/local/etc/php/php.ini

RUN pecl install redis && docker-php-ext-enable redis

RUN docker-php-ext-install gmp

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer self-update --1
RUN composer config -g repositories.packagist composer https://packagist.jp
RUN composer global require hirak/prestissimo
