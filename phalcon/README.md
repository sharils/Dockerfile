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

See the following in your browser. This is the result of index.php in this
directory. Phalcon is in the list.

	Array
	(
		[0] => Core
		[1] => date
		[2] => ereg
		[3] => libxml
		[4] => openssl
		[5] => pcre
		[6] => sqlite3
		[7] => zlib
		[8] => ctype
		[9] => curl
		[10] => dom
		[11] => fileinfo
		[12] => filter
		[13] => hash
		[14] => iconv
		[15] => json
		[16] => SPL
		[17] => PDO
		[18] => session
		[19] => posix
		[20] => Reflection
		[21] => standard
		[22] => SimpleXML
		[23] => pdo_sqlite
		[24] => Phar
		[25] => tokenizer
		[26] => xml
		[27] => xmlreader
		[28] => xmlwriter
		[29] => mysqlnd
		[30] => apache2handler
		[31] => mongo
		[32] => mbstring
		[33] => mcrypt
		[34] => phalcon
		[35] => pdo_mysql
		[36] => pdo_pgsql
	)

## Build ##

	docker build --tag='smutdose/phalcon' .
