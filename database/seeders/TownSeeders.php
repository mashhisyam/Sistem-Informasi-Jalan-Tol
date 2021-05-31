<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TownSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarif_kotas')->insert([
            ['id_kota' => '1', 'nama_kota' => 'malang'],
            ['id_kota' => '2', 'nama_kota' => 'pandaan'],
            ['id_kota' => '3', 'nama_kota' => 'purwodadi'],
            ['id_kota' => '4', 'nama_kota' => 'lawang'],
            ['id_kota' => '5', 'nama_kota' => 'malan'],
            ['id_kota' => '6', 'nama_kota' => 'malang'],
        ]);
    }
}
