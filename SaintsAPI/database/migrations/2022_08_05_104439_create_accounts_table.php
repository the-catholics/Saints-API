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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('history');
            $table->foreignId('language_id')->constrained('languages');
            $table->foreignId('historic_date_id')->constrained('historic_dates');
            $table->foreignId('historic_time_id')->constrained('historic_times');
            $table->foreignId('native_place_id')->constrained('native_places');
            $table->foreignId('saint_id')->constrained('saints');
            $table->foreignId('work_id')->constrained('works');
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
        Schema::dropIfExists('accounts');
    }
};
