# PHPUnit #

PHPUnit is a programmer-oriented testing framework for PHP.

## Notice ##

This is not an official phpunit for docker.

## Usage ##

Cd into the root of the repository. Then run this command:

	docker run --tty --volume $PWD:/smutdose/phpunit smutdose/phpunit

It looks for a tests directory where there is a phpunit.xml file. If this
doesn't hold, run this command:

	docker run --tty --volume $PWD:/smutdose/phpunit smutdose/phpunit phpunit -c <path-to-phpunit.xml>

## Test ##

Cd into the root of this repository. Then run this command:

	docker run --tty --volume $PWD:/smutdose/phpunit --volume /tmp/smutdose/phpunit/:/tmp/smutdose/phpunit/ smutdose/phpunit

## Build ##

	docker build --tag smutdose/phpunit .
