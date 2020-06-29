<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {

            
            $table->id();
            $table->integer('rut');
            $table->string('name');
            $table->string('business_name');
            $table->string('direction');
            $table->integer('phone');
            $table->boolean('state')->default(1);
            $table->timestamps();
            
            $table->foreignId('type_institution_id')
            ->references('id')
            ->on('type_institutions')
            ->onDelete('cascade');
            

            $table->foreignId('commune_id')
                ->references('id')
                ->on('Communes')
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
        Schema::dropIfExists('institutions');
    }
}
