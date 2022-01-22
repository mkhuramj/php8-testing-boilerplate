# The base PHP FPM Image to be used to build our custom image
FROM php:8.0.15-fpm

# Arguments defined in docker-compose.yml
ARG USER
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip

# Clear cache
RUN apt-get autoremove \
    && apt-get autoclean \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# You Can Install the PHP extensions (Which are not part of the PHP-FPM Image) with the following command
# RUN docker-php-ext-install xml pdo_mysql mbstring exif pcntl bcmath gd zip pdo_pgsql intl

# Copying xdebug config files to Debug PHP on VSCode
COPY ./conf.d/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
COPY ./conf.d/error_reporting.ini /usr/local/etc/php/conf.d/error_reporting.ini

RUN pecl install xdebug 
RUN docker-php-ext-enable xdebug

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user, along with her home directory, to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$USER $USER
RUN mkdir -p /home/$USER/.composer && \
    chown -R $USER:$USER /home/$USER/

USER $user

#Set working directory
WORKDIR /var/www
