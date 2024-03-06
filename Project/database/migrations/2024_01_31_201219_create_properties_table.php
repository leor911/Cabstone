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
        Schema::create('properties', function (Blueprint $table) {
            $table->unsignedBigInteger("houseID");
            $table->integer("prknSpacesNo");
            $table->integer("garageSpacesNo");
            $table->string("prknSize");
            $table->integer("acreSize");
            $table->integer("squareFeet");
            $table->string("otherDesc");
            $table->timestamps();
            $table->foreign("houseID")->references("houseID")->on("houses");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
