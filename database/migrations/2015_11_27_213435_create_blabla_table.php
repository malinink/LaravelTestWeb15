<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlablaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blabla', function (Blueprint $table) {
            
            $table->integer('fruit_id')->unsigned();
            $table->foreign('fruit_id')->references('id')->on('fruits')->onDelete('cascade');
            $table->integer('collector_id')->unsigned();
            $table->foreign('collector_id')->references('id')->on('collectors')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('blabla');
    }
}
