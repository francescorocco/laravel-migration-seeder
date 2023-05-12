<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 30);
            $table->string('departure_station', 50);
            $table->string('arrival_station', 50);
            $table->date('date');
            $table->time('departure_time');
            $table->time('arrival_time');
            $table->integer('train_code');
            $table->unsignedtinyInteger('number_of_carriages');
            $table->unsignedInteger('delay')->nullable()->default(null);
            $table->boolean('deleted')->nullable()->default(false);

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
        Schema::dropIfExists('trains');
    }
};
