FROM php:8.1.5-fpm

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

COPY composer.lock composer.json /var/www/html/

WORKDIR /var/www/html/

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    zip \
    vim \
    git \
    curl

RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN yes | pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.idekey=VSCODE" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.client_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_connect_back=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

COPY . /var/www/html

EXPOSE 9000
CMD ["php-fpm"]
