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
        Schema::create('plantations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('userID');
            $table->string('plantationArea');
            $table->string('maturePlant');
            $table->string('immaturePlant');
            $table->string('producingOil');
            $table->string('immatureOil');
            $table->string('plantationLand');
            $table->string('ownershipStatus');
            $table->string('legalStatus');
            $table->string('spatialPlan');
            $table->string('stdb');
            $table->string('sppl');
            $table->string('soilType');
            $table->string('seedlingType');
            $table->string('nitgrogenFertilizer');
            $table->string('phosphorusFertilizer');
            $table->string('potassiumFertilizer');
            $table->string('magnesiumFertilizer');
            $table->string('boronFertilizer');
            $table->string('copperFertilizer');
            $table->string('discClearing');
            $table->string('rowClearing');
            $table->string('pruning');
            $table->string('harvestingFrequency');
            $table->string('ffbProduction');
            $table->string('ffbSold');
            $table->string('ffbPrice');
            $table->string('plantationIncome');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plantations');
    }
};
