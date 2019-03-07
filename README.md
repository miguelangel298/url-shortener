

# Shortener url

It is an API for the url minification in order to obtain a url with fewer characters.
To generate the code that is assigned to the url supplied for the minification wing we use the following class

# UrlShort

Class to generate a random code with a specified string of characters. This class has two methods available:

`setLength`: When generating the code you can set the number of characters that will return

`generate`: Generate the code, this uses 3 functions native php to generate it.

* `str_repeat`: repeat a string.
* `str_shuffle`: to return a random string.
* `substr`: cut a string of characters

# Pre-reqs
To build and run this app locally you will need a few things:
- Install PHP(=>7.0)
- Composer
- Docker (docker-composer)

# Getting started

-  Run the project
```
composer install

cp .env.example .env

php artisan key:generate

docker-compose up --build

php artisan migrate

php artisan db:seed

```
- Possible problem

If your app presents a problem with the database, it's probably because you did not find the ip of the database

Solve with the following steps:


* In the console execute this command `docker inspect db`.
* In the returned data look for `IPAddress`.
* Go to `.env` and in `DB_HOST` enter the `IPAddress` value.
* Stop the docker container `Ctrl+c` and vueleva to initialize it `docker-composer up`

# Tests

```
./vendor/bin/phpunit 
```
