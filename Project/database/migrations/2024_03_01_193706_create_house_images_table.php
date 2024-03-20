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
        Schema::create('house_images', function (Blueprint $table) {
            $table->increments("image_id")->nullable(false);
            $table->bigInteger("houseID")->unsigned()->nullable(false);
            $table->binary('image')->nullable(false);
            $table->timestamps();
            $table->foreign('houseID')->references('houseID')->on('houses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('house_images');
    }
};
