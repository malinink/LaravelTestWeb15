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
            
            $table->unsigned('fruit_id');
            $table->foreign('fruit_id')->references('id')->on('fruits')->onDelete('cascade');
            $table->unsigned('collector_id');
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
