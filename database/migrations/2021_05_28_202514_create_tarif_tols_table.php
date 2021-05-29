<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifTolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif_tols', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_tol');
            $table->integer('id_kota');
            $table->string('gerbangkeluar');
            $table->integer('gol1');
            $table->integer('gol2');
            $table->integer('gol3');
            $table->integer('gol4');
            $table->integer('gol5');
            $table->integer('gol6');
            $table->timestamps();
            $table->primary('id_tol');
        });

        Schema::table('tarif_tols', function ($table){
            $table->foreign('id_kota')
            ->references('id_kota')
            ->on('tarif_kotas')
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
        Schema::dropIfExists('tarif_tols');
    }
}
