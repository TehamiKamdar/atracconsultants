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
        Schema::create('countrydetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->string('image')->nullable();
            $table->string('why-study')->required();
            $table->string('requirements')->required();
            $table->string('costOfStudy')->required();
            $table->string('scholarships')->required();
            $table->string('visaRequire')->required();
            $table->string('workOpp')->required();
            $table->string('bookMeeting')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countrydetails');
    }
};
