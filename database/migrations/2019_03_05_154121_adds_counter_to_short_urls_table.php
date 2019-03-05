<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddsCounterToShortUrlsTable extends Migration
{
    public function up()
    {
        Schema::table('short_urls', function (Blueprint $table) {
            $table->unsignedInteger('counter')->default(0)->after('code');
        });
    }

}

