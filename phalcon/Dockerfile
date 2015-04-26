FROM php:apache
MAINTAINER sharils@users.noreply.github.com

RUN apt-get update

# Phalcon's optional dependencies
RUN apt-get install -y libssl-dev
RUN pecl install mongo
RUN echo 'extension=mongo.so' > /usr/local/etc/php/conf.d/mongo.ini
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install pdo_mysql
RUN apt-get install -y libmcrypt-dev
RUN docker-php-ext-install mcrypt
RUN apt-get install -y libpq-dev
RUN docker-php-ext-install pdo_pgsql

# docker-php-ext-install phalcon doesn't work
RUN apt-get install -y gcc
RUN apt-get install -y libpcre3-dev
RUN apt-get install -y make
RUN apt-get install -y php5-dev
RUN apt-get install -y php5-mysql
RUN apt-get install -y git
RUN git clone --branch=phalcon-v2.0.0 --depth=1 https://github.com/phalcon/cphalcon.git
RUN cd cphalcon/build && ./install
RUN echo 'extension=phalcon.so' > /usr/local/etc/php/conf.d/phalcon.ini

# We uses .htaccess
RUN a2enmod rewrite
