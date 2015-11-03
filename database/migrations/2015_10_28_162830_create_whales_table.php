<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhalesTable extends Migration
{
    public function up()
    {
        Schema::create('whales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identity');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('sex');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('whales');
    }
}
