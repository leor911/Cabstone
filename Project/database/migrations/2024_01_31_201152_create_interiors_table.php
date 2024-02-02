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
        Schema::create('interiors', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("houseID");
            $table->integer("bedroomNo");
            $table->integer("bathNo");
            $table->integer("kitchenNo");
            $table->string("heatingDesc");
            $table->string("basementDesc");
            $table->string("applianceDesc");
            $table->integer("floorsNo");
            $table->string("floorType");
            $table->string("coolingDesc");
            $table->string("otherDesc");
            $table->foreign("houseID")->references('houseID')->on("houses");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interiors');
    }
};
