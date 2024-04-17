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
        Schema::create('professionals', function (Blueprint $table) {
            $table->id();
            $table->string('encoded_zuid')->nullable(false);
            $table->string('full_name')->nullable(false);
            $table->string('business_name')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('profile_link')->nullable();
            $table->string('profile_photo_src')->nullable();
            $table->boolean('is_top_agent')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professionals');
    }
};
