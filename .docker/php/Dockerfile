FROM php:8.3.11-fpm

# INSTALLING PHP EXTENTIONS
RUN docker-php-ext-install pdo pdo_mysql

# INSTALLING PACKAGES
RUN apt-get update && apt install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && apt-get clean

# ADDING XDBUG PACKAGE
COPY ./.docker/php/xdebug/99-xdebug.ini /usr/local/etc/php/conf.d
RUN pecl install xdebug \
   && docker-php-ext-enable xdebug

# ADDING COMPOSER
COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

# CREATE APP DIRECTORY
RUN mkdir -p /var/www/html/app

# COPYPING FILES
# COPY ./../../* /var/www/html/app

# INSTALLING COMPOSER
# WORKDIR /var/www/html/app
# RUN composer install
