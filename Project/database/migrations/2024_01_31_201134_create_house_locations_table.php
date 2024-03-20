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
            $table->bigInteger('houseID')->unsigned()->nullable(false);
            $table->string('country')->nullable(false);
            $table->string('state')->nullable(false);
            $table->string('county')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('zip')->nullable(false);
            $table->string('region')->nullable();
            $table->string('street')->nullable(false);
            $table->string('apptNo')->nullable();
            $table->string("zoning")->nullable(false);
            $table->string("subdivision")->nullable();
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
