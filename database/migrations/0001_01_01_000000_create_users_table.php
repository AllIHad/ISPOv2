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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('registrationNumber')->nullable();
            $table->string('email')->nullable()->unique();
            $table->string('password');
            $table->string('username');
            $table->string('gender')->nullable();
            $table->string('nationalID')->nullable();
            $table->string('taxID')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('rtRw')->nullable();
            $table->string('hamlet')->nullable();
            $table->string('village')->nullable();
            $table->string('subDistrict')->nullable();
            $table->string('districtCity')->nullable();
            $table->string('province')->nullable();
            $table->string('smallholder')->nullable();
            $table->string('organizationName')->nullable();
            $table->string('organizationEmail')->nullable();
            $table->string('age')->nullable();
            $table->date('dob')->nullable();
            $table->string('placeOfBirth')->nullable();
            $table->string('religion')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('maritalStatus')->nullable();
            $table->string('familyMembers')->nullable();
            $table->string('maleFamilyMembers')->nullable();
            $table->string('femaleFamilyMembers')->nullable();
            $table->string('lastEducationLevel')->nullable();
            $table->string('durationOfEducation')->nullable();
            $table->string('palmOilPlantationExperience')->nullable();
            $table->string('otherJob')->nullable();
            $table->integer('role')->default('0');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
