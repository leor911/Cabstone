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
            $table->increments("image_id");
            $table->unsignedBigInteger("house_id");
            $table->foreign('house_id')->references('houseID')->on('houses');
            $table->binary('image');
            $table->timestamps();
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
