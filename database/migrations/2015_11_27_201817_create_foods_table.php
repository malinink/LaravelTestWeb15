<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodsTable extends Migration
{
     /**
     * Create table
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'foods',
            function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->timestamps();
            }
        );
        
    }
    /**
     * Drop table
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('foods');
    }
}
