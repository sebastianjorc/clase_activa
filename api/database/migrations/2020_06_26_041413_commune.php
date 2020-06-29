<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Commune extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Communes', function (Blueprint $table) {

            $table->id();
            $table->string('name')->lenght(30);
            $table->integer('province_id');
            $table->timestamps();

            $table->foreign('province_id')
                ->references('id')
                ->on('Provinces')
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
        Schema::dropIfExists('Communes');
    }
}
