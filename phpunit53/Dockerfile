FROM vandries/phpenv:5.3
MAINTAINER sharils@users.noreply.github.com

WORKDIR /smutdose/phpunit

RUN curl https://phar.phpunit.de/phpunit.phar -o phpunit.phar -s
RUN chmod +x phpunit.phar
RUN mv phpunit.phar /usr/local/bin/phpunit

CMD ["phpunit", "--configuration", "tests/phpunit.xml", "--coverage-clover", "/tmp/smutdose/phpunit/coverage.xml", "--coverage-html", "/tmp/smutdose/phpunit/report"]
