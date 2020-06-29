<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Province extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Provinces', function (Blueprint $table) {

            $table->integer('id',1);
            $table->string('name')->lenght(30);
            $table->integer('region_id');
            $table->timestamps();

            $table->foreign('region_id')
            ->references('id')
            ->on('Regions')
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
        Schema::dropIfExists('Provinces');
    }
}
