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
        Schema::create('saints', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->text('history');
            $table->foreignId('language_id')->constrained('languages');
            $table->foreignId('merit_id')->constrained('merits');
            $table->foreignId('native_place_id')->constrained('native_places');
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
        Schema::dropIfExists('saints');
    }
};
