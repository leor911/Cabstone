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
            $table->integer("houseID")->unsigned()->nullable(false);
            $table->string("homeType")->nullable(false);
            $table->string("archType")->nullable(false);
            $table->string("foundationType")->nullable(false);
            $table->string("constMaterials")->nullable(false);
            $table->string("roof")->nullable(false);
            $table->integer("builtYear")->nullable(false);
            $table->integer("remodelYear");
            $table->string("otherDesc")->nullable(false);
            $table->string("newConstruction");
            $table->timestamps();
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
