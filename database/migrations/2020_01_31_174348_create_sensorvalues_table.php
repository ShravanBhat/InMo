<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSensorvaluesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sensorvalues', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('system_id');
            $table->string('fire');
            $table->string('temperature');
            $table->string('humidity');
            $table->string('mq2');
            $table->string('sound');
            $table->string('location');
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
        Schema::dropIfExists('sensorvalues');
    }
}
