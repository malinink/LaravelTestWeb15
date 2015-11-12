<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFieldIntoWhales extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table(
            'whales', function ($table) {
                $table->string('fruit');
                $table->string('hobby');
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
        Schema::table(
            'whales', function ($table) {
                $table->dropColumn('fruit');
                $table->dropColumn('hobby');
            }
        );
    }
}
