FROM php:apache
MAINTAINER sharils@users.noreply.github.com

# docker-php-ext-install phalcon doesn't work
RUN apt-get update
RUN apt-get install -y gcc
RUN apt-get install -y libpcre3-dev
RUN apt-get install -y make
RUN apt-get install -y php5-dev
RUN apt-get install -y php5-mysql
RUN apt-get install -y git
RUN git clone --depth=1 -v https://github.com/phalcon/cphalcon.git
RUN cd cphalcon/build && ./install

# Phalcon's optional dependencies
RUN pecl install mongo
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install pdo_mysql
RUN apt-get install -y libmcrypt-dev
RUN docker-php-ext-install mcrypt
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo_pgsql

# We uses .htaccess
RUN a2enmod rewrite

COPY php.ini /usr/local/etc/php/
