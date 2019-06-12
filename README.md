

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

copy the ENV in the project:
```
 cp .env.example .env
```

install dependencies of project:
```
 composer install
```

generate key for application:
```
php artisan key:generate
```

run docker and connect to container:
```
 docker-compose up --build
```

run migration for creating the tables:
```
docker-compose exec web php artisan migrate
```
run seeder:
```
docker-compose exec web php artisan db:seed
```
# call localhost in your browser:

See the list of routes registered in the API:
- GET `http://localhost:{PORT}/`

Shortener to URL:
- POST `http://localhost:{PORT}/api/urls`

Use a URL shortener:
- GET `http://localhost:{PORT}/{CODE}`


# Tests

```
docker-compose exec web ./vendor/bin/phpunit 
```
