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
        Schema::create('unideptprogcourses', function (Blueprint $table) {
            $table->id();
$table->unsignedBigInteger('university_id');
            $table->foreign('university_id')->references('id')->on('universities')->cascadeOnDelete()->cascadeOnUpdate();
            $table->unsignedBigInteger('depart_id');
            $table->foreign('depart_id')->references('id')->on('departments')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('program_level');
            $table->foreign('program_level')->references('id')->on('program_levels')->onDelete('restrict')->onUpdate('cascade');
            $table->unsignedBigInteger('course_id');
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('restrict')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unideptprogcourses');
    }
};
