<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComputersTable extends Migration
{
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mark');
            $table->string('model');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('computers');
    }
}