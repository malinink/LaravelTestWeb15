<?php

use Illuminate\Database\Migrations\Migration;

class AddToCountriesTable extends Migration
{
     public function up()
    {
        Schema::table('countries', function($table)
        {
            $table->integer('year');
            $table->string('sibling');
        });
    }

    public function down()
    {
        Schema::table('countries',function($table){
            
        $table->dropColumn(['year','sibling']);
        
        });
    }
}

