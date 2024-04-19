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
        Schema::create('interiors', function (Blueprint $table) {
            $table->bigInteger("houseID")->unsigned()->nullable(false);
            $table->integer("bedroomNo")->nullable(false);
            $table->integer("mainBedNo")->nullable();
            $table->integer("fullBathNo")->nullable(false);
            $table->integer("halfBedNo")->nullable();
            $table->integer("bathNo")->nullable(false);
            $table->integer("mainBathNo")->nullable(false);
            $table->integer("kitchenNo")->nullable(false);
            $table->string("kitchenType")->nullable(false);
            $table->string("stoveType")->nullable(false);
            $table->string("laundryType")->nullable(false);
            $table->string("electricType")->nullable(false);
            $table->string("sewerType")->nullable(false);
            $table->string("waterType")->nullable(false);
            $table->string("utilitiesType")->nullable(false);
            $table->string("heatingDesc")->nullable(false);
            $table->string("basementDesc")->nullable(false);
            $table->string("applianceDesc")->nullable(false);
            $table->integer("floorsNo")->nullable(false);
            $table->string("floorType")->nullable();
            $table->string("coolingDesc")->nullable(false);
            $table->string("otherDesc")->nullable();
            $table->timestamps();
            $table->foreign("houseID")->references('id')->on("houses");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('interiors');
    }
};
