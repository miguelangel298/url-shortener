<?php

use Faker\Generator as Faker;
use App\ShortUrl;
use App\utils\UrlShort;

$factory->define(ShortUrl::class, function (Faker $faker) {

    $urlShort = new UrlShort();
    return [
        'url' => $faker->url,
        'code' => $urlShort->generate(),
    ];
});
