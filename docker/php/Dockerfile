FROM php:8.2-fpm

ARG PHP_RUN_DEPS="\
    libbz2-1.0 \
    libxslt1.1 \
    libpng16-16 \
    libfreetype6 \
    libxpm4 \
    libxml2 \
    libjpeg62-turbo \
    libzip4 \
    libgmp10"


ARG PHP_BUILD_DEPS="\
    libpq-dev \
    libpng-dev \
    libwebp-dev \
    libjpeg62-turbo-dev \
    libxpm-dev \
    libxml2-dev \
    libfreetype6-dev \
    libgmp-dev \
    libicu-dev \
    libbz2-dev \
    libzip-dev \
    autoconf \
    g++ \
    make"

ARG PHP_EXTENSIONS="\
    gd \
    gmp \
    intl \
    pdo_mysql \
    bcmath \
    bz2 \
    sockets \
    soap \
    pcntl \
    zip"

ARG PHP_PECL_EXTENSIONS="\
    apcu \
    redis \
    xdebug"

RUN apt update -y \
    && apt install -y \
    bash \
    curl \
    unzip \
    zip \
    default-mysql-client \
    ${PHP_RUN_DEPS} \
    && \
    apt install -y ${PHP_BUILD_DEPS} \
    && rm -rf /var/lib/apt/lists/ \
    && docker-php-ext-configure gd \
      --disable-gd-jis-conv \
      --with-freetype=/usr \
      --with-jpeg=/usr \
      --with-webp=/usr \
      --with-xpm=/usr \
    && docker-php-ext-install -j5 ${PHP_EXTENSIONS} \
    && pecl install -o -f ${PHP_PECL_EXTENSIONS} \
    && rm -rf /tmp/pear \
    && docker-php-ext-enable ${PHP_EXTENSIONS} redis xdebug \
    && apt remove -y $PHP_BUILD_DEPS \
    && apt clean

# Install composer
COPY --from=composer/composer:2-bin /composer /usr/bin/composer

# Set www-data to have UID 1000
RUN usermod -u 1000 www-data;

RUN mkdir -p /var/www/.composer /var/www/html /var/www/.config/psysh \
    && chown -R www-data:www-data /var/www/html /var/www/.composer /var/www/.config/psysh

WORKDIR /var/www/html

USER www-data
