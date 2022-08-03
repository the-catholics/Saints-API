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
        Schema::create('works', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->text('history');
            $table->text('latitude');
            $table->text('longitude');
            $table->foreignId('laguange_id')->constrained('languages');
            $table->foreignId('native_place_id')->constrained('native_places');
            $table->foreignId('historic_date_id')->constrained('historic_dates');
            $table->foreignId('historic_time_id')->constrained('historic_times');
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
        Schema::dropIfExists('works');
    }
};
