<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gate', function (Blueprint $table) {
            $table->integer('id', true)->primary();
            $table->string('nama_gerbang');
            $table->timestamps();
        });

        Schema::table('tarif', function (Blueprint $table) {
            $table->foreign('masuk')->on('gate')->references('id');
            $table->foreign('keluar')->on('gate')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gate');
    }
}
