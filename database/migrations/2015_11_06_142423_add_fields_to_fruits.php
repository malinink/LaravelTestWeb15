<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToFruits extends Migration
{
    public function up()
    {
        Schema::table('fruits', function ($table) {
            $table->double('price', 15, 2);
            $table->string('condition');
        });
    }

    public function down()
    {
        Schema::table('fruits', function ($table) {
            $table->dropColumn('price');
            $table->dropColumn('condition');
        });
    }
}
