<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToCars extends Migration
{
    public function up()
    {
        Schema::table('cars', function(Blueprint $table) {
            $table->integer('price')->after('color');
            $table->integer('year')->after('model');
        });
    }
    public function down()
    {
        Schema::table('cars', function(Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('year');
        });
    }
}
