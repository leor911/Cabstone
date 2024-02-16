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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("houseID");
            $table->integer("realtorID");
            $table->integer("price");
            $table->string("listingType");
            $table->string("description");
            $table->integer("coordinateLatitude");
            $table->integer("coordinateLongitude");
            $table->string("otherDesc");
            $table->primary("houseID");
            // $table->foreign("realtorID")->references('realtorID')->on('realtors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
