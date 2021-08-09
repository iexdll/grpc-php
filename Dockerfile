FROM php:8.0.9-fpm

RUN apt-get update && apt-get install -y \
        autoconf \
        zlib1g-dev \
        zip \
        unzip \
        git

RUN pecl install grpc \
    && docker-php-ext-enable grpc

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && rm composer-setup.php