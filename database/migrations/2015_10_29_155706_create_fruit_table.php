<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFruitTable extends Migration
{
    /**
     * Create table.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create(
            'fruits', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('identity');
                $table->string('name');
                $table->string('color');
                $table->integer('weight');
                $table->timestamps();
            }
        );
    }
    /**
     * Delete table.
     * 
     * @return void
     */
    public function down()
    {
        Schema::drop('fruits');
    }
}
