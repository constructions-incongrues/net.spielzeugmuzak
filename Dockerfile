FROM php:5.6-apache

RUN docker-php-ext-install -j$(nproc) mysql \
    && a2enmod rewrite
