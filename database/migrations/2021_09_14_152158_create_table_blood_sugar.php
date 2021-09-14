<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBloodSugar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blood_sugar', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->float('prediction_above');
            $table->float('prediction_below');
            $table->float('sugar_value');
            $table->dateTime('date_check');
            $table->longText('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blood_sugar');
    }
}
