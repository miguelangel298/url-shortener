<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShortUrlViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('short_url_views', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('short_url_id');
            $table->foreign('short_url_id')->references('id')->on('short_urls')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('short_url_views', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropIfExists('short_url_views');
        });
    }
}
