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
        Schema::create('validators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ispoID');
            $table->foreignId('userID');
            $table->string('file1')->nullable();
            $table->string('file2')->nullable();
            $table->string('file3')->nullable();
            $table->string('file4')->nullable();
            $table->string('file5')->nullable();
            $table->string('file6')->nullable();
            $table->string('file7')->nullable();
            $table->string('file8')->nullable();
            $table->string('file9')->nullable();
            $table->string('file10')->nullable();
            $table->string('file11')->nullable();
            $table->string('file12')->nullable();
            $table->string('file13')->nullable();
            $table->string('file14')->nullable();
            $table->string('file15')->nullable();
            $table->string('file16')->nullable();
            $table->string('file17')->nullable();
            $table->string('file18')->nullable();
            $table->string('file19')->nullable();
            $table->string('file20')->nullable();
            $table->string('file21')->nullable();
            $table->string('file22')->nullable();
            $table->string('file23')->nullable();
            $table->string('file24')->nullable();
            $table->string('file25')->nullable();
            $table->string('file26')->nullable();
            $table->string('file27')->nullable();
            $table->string('file28')->nullable();
            $table->string('file29')->nullable();
            $table->string('file30')->nullable();
            $table->string('file31')->nullable();
            $table->string('file32')->nullable();
            $table->string('file33')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validators');
    }
};
