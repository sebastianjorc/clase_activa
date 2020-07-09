<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicLevelCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_level_course', function (Blueprint $table) {
            $table->id();

            $table->foreignId('academic_level_id')
            ->references('id')
            ->on('Academic_levels')
            ->onDelete('cascade');

            $table->foreignId('course_id')
            ->references('id')
            ->on('courses')
            ->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('academic_level_course');
    }
}
