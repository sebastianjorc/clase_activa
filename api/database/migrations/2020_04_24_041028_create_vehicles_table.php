<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('vin')->nullable();
            $table->string('plate')->unique()->nullable();
            $table->string('maker');
            $table->string('model');
            $table->integer('year')->nullable();
            $table->string('engine')->nullable();
            $table->string('fuel')->nullable();
            $table->string('transmission')->nullable();
            $table->string('color')->nullable();
            $table->timestamps();
        });

        DB::statement('ALTER TABLE vehicles ADD CONSTRAINT chkNotNull CHECK (vin is not null or plate is not null)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
