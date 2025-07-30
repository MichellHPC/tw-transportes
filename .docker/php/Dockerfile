FROM php:8.3-fpm

# Instala extensões e dependências
RUN apt-get update && apt-get install -y \
    git curl zip unzip libzip-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql zip

# Instala Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Configurações do Xdebug
COPY .docker/php/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Instala Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
