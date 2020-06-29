<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Attorney extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Attorneys', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            
            $table->foreignId('type_user_id')
            ->references('id')
            ->on('Type_users')
            ->onDelete('cascade');
            
            $table->foreignId('student_id')
            ->references('id')
            ->on('Students')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Attorneys');
    }
}
