FROM php
MAINTAINER sharils@users.noreply.github.com

WORKDIR /smutdose/phpunit

RUN curl https://phar.phpunit.de/phpunit.phar -o phpunit.phar -s
RUN chmod +x phpunit.phar
RUN mv phpunit.phar /usr/local/bin/phpunit

# Test Execution Timeout requires pcntl installed
RUN docker-php-ext-install pcntl

# The code coverage report feature requires the Xdebug (2.1.3 or later) and
# tokenizer extensions
RUN pecl install xdebug
RUN echo "zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20131226/xdebug.so" > /usr/local/etc/php/conf.d/xdebug.ini

CMD ["phpunit", "--configuration", "tests/phpunit.xml", "--coverage-clover", "/tmp/smutdose/phpunit/coverage.xml", "--coverage-html", "/tmp/smutdose/phpunit/report"]
