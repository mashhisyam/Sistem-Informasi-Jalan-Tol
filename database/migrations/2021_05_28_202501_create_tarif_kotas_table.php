<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTarifKotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarif_kotas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id_kota');            
            $table->string('nama_kota');    
            $table->timestamps();
            $table->primary('id_kota');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tarif_kotas');
    }
}
