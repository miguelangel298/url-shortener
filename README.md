

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
- Docker (docker-composer)

# Getting started

-  Run the project
```
docker-compose up --build

composer install

php artisan db:seed

```
# Tests

```
./vendor/bin/phpunit 
```
