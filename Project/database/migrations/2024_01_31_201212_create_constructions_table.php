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
        Schema::create('constructions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("houseID");
            $table->string("homeType");
            $table->string("archType");
            $table->string("constMaterials");
            $table->string("roof");
            $table->integer("builtYear");
            $table->string("otherDesc");
            $table->foreign("houseID")->references("houseID")->on("houses");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('constructions');
    }
};
