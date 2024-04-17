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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('professional_id')->unsigned()->nullable(false);
            $table->text('review_excerpt')->nullable();
            $table->dateTime('review_excerpt_date')->nullable();
            $table->string('review_link')->nullable();
            $table->integer('num_total_reviews')->nullable();
            $table->integer('review_stars_rating')->nullable();
            $table->timestamps();
            $table->foreign('professional_id')->references('id')->on('professionals');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
