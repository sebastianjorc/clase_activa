<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Professor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Professors', function (Blueprint $table) {
            $table->id();
            $table->boolean('state')->default(1);
            $table->timestamps();
            
            $table->foreignId('type_user_id')
            ->references('id')
            ->on('Type_users')
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
        Schema::dropIfExists('Proffesors');
    }
}
