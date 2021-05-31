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
            $table->integer('masuk')->index();
            $table->integer('keluar')->index();
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
