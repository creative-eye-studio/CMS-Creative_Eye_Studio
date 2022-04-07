FROM php:8.0.2-apache

COPY . /

CMD php -S 0.0.0.0:80 /public/index.php