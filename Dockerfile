FROM php:8.5-apache

WORKDIR /var/www/html/site/

COPY app/ /var/www/html/

EXPOSE 80
