FROM php:7.4-fpm

# SYSTEM SETUP
RUN apt-get update -y
RUN apt-get install -y --no-install-recommends apt-utils \
    && apt-get install -y sendmail \
    && apt-get install -y libpng-dev \
    && apt-get install -y libjpeg62-turbo-dev \
    && apt-get install -y libfreetype6-dev \
    && apt-get install -y libxml2-dev \
    && apt-get install -y libssl-dev \
    && apt-get install -y libzip-dev \
    && apt-get install -y libmcrypt-dev \
    && apt-get install -y memcached \
    && apt-get install -y libmemcached-dev \
    && apt-get install -y libicu-dev \
    && apt-get install -y zlib1g-dev \
    && apt-get install -y libonig-dev \
    && apt-get install -y libpq-dev

# NODE EXTENSIONS

# PHP EXTENSIONS
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install pdo_pgsql
RUN docker-php-ext-install zip
RUN docker-php-ext-install sockets
RUN docker-php-ext-install exif
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install gd

# COMPOSER
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# XDEBUG
RUN pecl install xdebug && docker-php-ext-enable xdebug

#PHP pecl redis
RUN pecl install -o -f redis

# SET USER
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

WORKDIR /var/www

CMD ["php-fpm"]