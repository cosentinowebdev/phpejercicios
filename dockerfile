FROM php:7.1-apache

RUN docker-php-ext-install mysqli

COPY . /var/www/html

EXPOSE 80