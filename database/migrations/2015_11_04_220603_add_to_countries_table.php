<?php

use Illuminate\Database\Migrations\Migration;

class AddToCountriesTable extends Migration
{
    /**
    * Create
    *
    * @return void
    */
    
    public function up()
    {
        Schema::table(
            'countries',
            function ($table) {
                $table->integer('year');
                $table->string('sibling');
            }
        );
    }

    /**
    * Delete
    *
    * @return void
    */
    
    public function down()
    {
        Schema::table(
            'countries',
            function ($table) {
                $table->dropColumn(['year','sibling']);
            }
        );
    }
}
