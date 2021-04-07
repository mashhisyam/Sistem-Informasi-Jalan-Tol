<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif', function (Blueprint $table) {
            $table->id();
            $table->string('masuk');
            $table->string('keluar');
            $table->bigInteger('gol1', false);
            $table->bigInteger('gol2', false);
            $table->bigInteger('gol3', false);
            $table->bigInteger('gol4', false);
            $table->bigInteger('gol5', false);
            $table->bigInteger('gol6', false);
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
        Schema::dropIfExists('tolgate');
    }
}
