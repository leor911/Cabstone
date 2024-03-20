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
        Schema::create('houses', function (Blueprint $table) {
            $table->increments("houseID")->nullable(false);
            $table->integer('realtor_id')->unsigned();
            $table->integer("price")->nullable(false);
            $table->string("listingType")->nullable(false);
            $table->string("description")->nullable(false);
            $table->integer("coordinateLatitude");
            $table->integer("coordinateLongitude");
            $table->string("otherDesc");
            $table->timestamps();
            $table->foreign('realtor_id')
                ->references('id')
                ->on('users')
                ->whereExists(function($query){
                    $query->select('id')
                    ->from('users')
                    ->whereColumn('users.id', 'houses.realtor_id')
                    ->join('roles', 'users.role_name', '=', 'roles.role_name')
                    ->where('users.role_name', '=', 'realtor');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
