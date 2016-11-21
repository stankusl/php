<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Navigations extends Migration
{
    public function up()
    {
        Schema::create('navigations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('display_name');
            $table->integer('position');
            $table->integer('status');
            $table->integer('type');
            $table->integer('disabled');
            $table->string('color');
            $table->string('colorHover');
            $table->string('colorBgHover');
            $table->string('colorBg');
            $table->string('locale');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('navigations');
    }
}
