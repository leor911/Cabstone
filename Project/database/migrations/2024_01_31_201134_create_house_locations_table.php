<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('house_locations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('houseID');
            $table->string('country');
            $table->string('state');
            $table->string('county');
            $table->string('city');
            $table->string('zip');
            $table->string('region');
            $table->string('street');
            $table->string('apptNo');
            $table->timestamps();
            $table->foreign('houseID')->references('houseID')->on('houses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_locations');
    }
};
