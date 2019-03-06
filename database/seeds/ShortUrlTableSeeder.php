<?php

use Illuminate\Database\Seeder;
use App\ShortUrl;


class ShortUrlTableSeeder extends Seeder
{

    public function run()
    {
        ShortUrl::truncate();
        factory(ShortUrl::class, 100)->create();
    }
}
