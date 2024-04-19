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
        Schema::create('hdp_datas', function (Blueprint $table) {
            $table->id();
            $table->string('zpid')->nullable();
            $table->string('street_address')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->decimal('latitude', 10, 6)->nullable();
            $table->decimal('longitude', 10, 6)->nullable();
            $table->decimal('price', 20, 2)->nullable();
            $table->integer('bathrooms')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hdp_datas');
    }
};
