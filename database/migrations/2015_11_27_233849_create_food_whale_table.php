<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodWhaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'food_whale',
            function (Blueprint $table) {
                $table->integer('food_id')->unsigned()->index;
                $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade');
                $table->integer('whale_id')->unsigned()->index;
                $table->foreign('whale_id')->references('id')->on('whales');
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('food_whale');
    }
}
