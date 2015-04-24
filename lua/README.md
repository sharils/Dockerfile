# Lua #

Lua is a powerful, fast, lightweight, embeddable scripting language.

## Notice ##

This is not an official docker image for Lua 5.3.

## Usage ##

To execute a project, cd into the root of your project then mount $PWD to
/smutdose/lua. Now you can execute your project. For example:

	docker run --rm --volume $PWD:/smutdose/lua smutdose/lua lua hello-world.lua

You should see "Hello world!"

Or you can pass lua to the lua intepreter like this:

	docker run --rm smutdose/lua lua -e 'print("Hello world!")'

You should see "Hello world!"

## Test ##

Run this command to test your image.

	docker run --rm --volume $PWD:/smutdose/lua smutdose/lua ./hello-world.lua

You should see "Hello world!"

## Build ##

Run this command to build your image.

	docker build --tag='smutdose/lua' .
