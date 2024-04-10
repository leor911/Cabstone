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
        Schema::create('realtors', function (Blueprint $table) {
            $table->integer('realtor_id')->unsigned()->nullable();
            $table->string('city')->nullable();
            $table->string('specialty')->nullable();
            $table->string('available_days')->nullable();
            $table->string('available_hours')->nullable();
            $table->enum('contact_agent', ['Cooper Honert', 'Jack Korosec', 'Leo Rivera', 'Connor Hamilton'])->nullable();
            $table->binary('profile_image')->nullable();
            $table->timestamps();
            $table->foreign('realtor_id')
            ->references('id')
            ->on('users')
            ->where('role_name', 'realtor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('realtors');
    }
};
