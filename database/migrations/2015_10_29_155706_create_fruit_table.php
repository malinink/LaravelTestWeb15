<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFruitTable extends Migration
{
    public function up()
    {
        Schema::create('fruits', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('identity');
            $table->string('name');
            $table->string('color');
            $table->integer('weight');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('fruits');
    }
}
