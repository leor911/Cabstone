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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string("zpid")->nullable(false);
            $table->string("raw_home_status_cd")->nullable(false);
            $table->string("marketing_status_simplified_cd")->nullable();
            $table->string("img_src")->nullable();
            $table->boolean("has_image")->nullable();
            $table->string("detail_url")->nullable();
            $table->string("status_type")->nullable();
            $table->string("status_text")->nullable();
            $table->string("country_currency")->nullable();
            $table->decimal("price", 20, 2)->nullable();
            $table->int("unformatted_price")->nullable();
            $table->string("address")->nullable();
            $table->string("address_street")->nullable();
            $table->string("address_city")->nullable();
            $table->string("address_state")->nullable();
            $table->string("address_zipcode")->nullable();
            $table->boolean("is_undisclosed_address")->nullable();
            $table->integer("beds")->nullable();
            $table->integer("baths")->nullable();
            $table->integer("area")->nullable();
            $table->decimal("latitude", 10, 6)->nullable();
            $table->decimal("longitude", 10, 6)->nullable();
            $table->boolean("is_zillow_owned")->nullable();
            $table->bigInteger("variable_data_id")->unsigned()->nullable();
            $table->bigInteger("hdp_data_id")->unsigned()->nullable();
            $table->timestamps();
            $table->foreign("variable_data_id")->references("id")->on("varaible_data");
            $table->foreign("hdp_data_id")->references("id")->on("hdp_data");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
