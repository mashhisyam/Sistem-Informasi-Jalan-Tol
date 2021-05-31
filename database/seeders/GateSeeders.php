<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GateSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gate')->insert([
            ['id' => 1, "nama_gerbang" => "Malang"],
            ['id' => 2, "nama_gerbang" => "Pandaan"],
            ['id' => 3, "nama_gerbang" => "Singosari"],
            ['id' => 4, "nama_gerbang" => "Purwodadi"],
            ['id' => 5, "nama_gerbang" => "Lawang"],
            ['id' => 6, "nama_gerbang" => "Pakis"],
        ]);
    }
}
