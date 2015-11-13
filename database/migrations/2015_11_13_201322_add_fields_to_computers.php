<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldsToComputers extends Migration
{
    public function up()
    {
        Schema::table('computers', function (Blueprint $table) {
            $table->double('price', 15, 2);
            $table->integer('index_of_storage');
        });
    }
    public function down()
    {
        Schema::table('computers', function (Blueprint $table) {
            $table->dropColumn('price');
            $table->dropColumn('index_of_storage');
        });
    }
}