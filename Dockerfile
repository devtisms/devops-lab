FROM php:8.5-apache

WORKDIR /var/www/html/site/

COPY app/ /var/www/html/site/

EXPOSE 80
