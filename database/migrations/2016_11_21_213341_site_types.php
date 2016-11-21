<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SiteTypes extends Migration
{
    public function up()
    {
        Schema::create('site_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('site_types');
    }
}
