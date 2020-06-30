<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Region extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Regions', function (Blueprint $table) {

            $table->id();
            $table->smallInteger('numeration')->lenght(2);
            $table->string('name')->lenght(30);
            $table->char('abbreviation')->lenght(4);
            $table->string('capital')->lenght(30);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Regions');
    }
}
