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
        Schema::create('professional_locations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('professional_id')->unsigned()->nullable(false);
            $table->string('location')->nullable();
            $table->timestamps();
            $table->foreign('professional_id')->references('id')->on('professionals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('professional_locations');
    }
};
