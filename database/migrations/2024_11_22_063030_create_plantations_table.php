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
            $table->string('plantationArea');
            $table->string('maturePlant');
            $table->string('producingOil');
            $table->string('immatureOil');
            $table->string('plantationArea');
            $table->string('plantationArea');
            $table->string('plantationArea');
            $table->string('plantationArea');
            $table->string('plantationArea');
            $table->string('plantationArea');
            $table->string('plantationArea');
            $table->string('plantationArea');
            $table->string('plantationArea');
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
