# Phalcon #

Phalcon is a web framework implemented as a C extension offering high
performance and lower resource consumption.

## Notice ##

This is not an official docker image for Phalcon.

## Usage ##

To use this image, cd into the root of your project. Then run the following
command:

	docker run --publish 80:80 --rm --volume $PWD:/var/www/html/ smutdose/phalcon

Open http://localhost/ in your web browser to see the result.

## Test ##

Start Apache with Phalcon.

	docker run --publish 80:80 --rm --volume $PWD:/var/www/html/ smutdose/phalcon

Check the service is really running.

	firefox http://localhost/

You should see the following in your browser. This is the result of index.php
in this directory.

	Hello Phalcon 2.0.0!

If you instead see "Phalcon does not exist", please [report to me](https://github.com/sharils/Dockerfile/issues/new).

## Build ##

	docker build --tag='smutdose/phalcon' .
