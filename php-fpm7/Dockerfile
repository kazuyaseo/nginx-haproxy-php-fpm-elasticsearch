FROM php:7-fpm

# php & mysql client 
RUN apt-get update && apt-get install -y libmcrypt-dev curl php5-cli git zip libpng-dev openssl libssl-dev pkg-config \
    && docker-php-ext-install mcrypt pdo_mysql mysqli mbstring

# config.m4が無い時の対策
RUN docker-php-ext-install openssl; exit 0
RUN cp /usr/src/php/ext/openssl/config0.m4 /usr/src/php/ext/openssl/config.m4
RUN docker-php-ext-install openssl
 
RUN curl --silent --show-error https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN curl --silent --show-error https://deb.nodesource.com/setup_6.x | bash - \
    && apt-get install -y nodejs
 
WORKDIR /var/www
