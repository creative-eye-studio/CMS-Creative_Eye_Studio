FROM php:8.0.2-apache

COPY . /
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

CMD php -S 0.0.0.0:80 /public/index.php