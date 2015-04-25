# Zephir #

Zephir, an open source, high-level/domain specific language designed to ease
the creation and maintainability of extensions for PHP with a focus on type and
memory safety.

## Notice ##

This is not an official docker image for Zephir 0.6.2a.

## Usage ##

To build a project, cd into the root of your project then mount $PWD to
/smutdose/zepir. Now you can build your project. For example:

	docker run --rm --volume $PWD:/smutdose/zephir smutdose/zephir zephir build

## Test ##

Run these commands to test your image.

	docker run --interactive --tty --volume $PWD:/smutdose/zephir --workdir /tmp smutdose/zephir bash

	zephir init test
	cd test

	cp /smutdose/zephir/Hello.zep test

	zephir build

	cd /usr/src/php/ext/
	ln --symbolic /tmp/test/ext test
	docker-php-ext-install test

	php /smutdose/zephir/hello.php

You should see hello world.

## Build ##

Run this command to build your image.

	docker build --tag='smutdose/zephir' .
