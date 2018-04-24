<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Site extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_name');
            $table->text('metadata');
            $table->text('copyright');
            $table->text('privacy_policy');
            $table->text('trademarks');
            $table->text('facebook_url');
            $table->text('twitter_url');
            $table->text('pinterest_url');
            $table->text('gmail_url');
            $table->text('instagram_url');
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
        Schema::dropIfExists('site');
    }
}
