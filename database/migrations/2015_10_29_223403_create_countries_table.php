<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
    * Create
    *
    * @return nothing
    */
    
    public function up()
    {
        Schema::create(
            'countries',
            function (Blueprint $table) {
                $table->increments('id');
                $table->integer('identity');
                $table->string('name');
                $table->string('nameanime');
                $table->string('language');
                $table->integer('area');
                $table->timestamps();
            }
        );
    }

    /**
    * Delete
    *
    * @return nothing
    */

    public function down()
    {
        Schema::drop('countries');
    }
}
