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

            $table->string('train_company', 15);
            $table->string('station_start', 30);
            $table->string('station_end', 30);
            $table->date('time_start_date');
            $table->time('time_start_time');
            $table->date('time_end_date');
            $table->time('time_end_time');
            $table->integer('code_train');
            $table->tinyInteger('number_carriage');
            $table->integer('delay');
            $table->boolean('deleted');

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
