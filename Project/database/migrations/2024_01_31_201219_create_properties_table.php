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
            $table->integer("houseID")->unsigned()->nullable(false);
            $table->integer("prknSpacesNo")->nullable(false);
            $table->integer("garageSpacesNo")->nullable(false);
            $table->string("garageType");
            $table->string("lotType");
            $table->string("lotMaterials");
            $table->string("extensionType")->nullable(false);
            $table->string("prknSize")->nullable(false);
            $table->integer("acreSize")->nullable(false);
            $table->integer("squareFeet")->nullable(false);
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
