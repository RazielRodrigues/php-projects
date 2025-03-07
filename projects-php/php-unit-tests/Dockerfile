FROM php:7.2-apache

# Instalação do SQLite e PDO SQLite
RUN apt-get update && \
    apt-get install -y libsqlite3-dev && \
    docker-php-ext-install pdo_sqlite

# Instalação do driver MySQLi
RUN docker-php-ext-install mysqli

# Instalação do Xdebug
RUN pecl install xdebug-2.7.0 && docker-php-ext-enable xdebug
COPY ./docker/php/conf.d/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
COPY ./docker/php/conf.d/error_reporting.ini /usr/local/etc/php/conf.d/error_reporting.ini


# Instalação do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Limpeza de pacotes não necessários
RUN apt-get clean && \
    rm -rf /var/lib/apt/lists/*
