<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tarif')->insert(
            [
                array(
                    'masuk' => 1,
                    'keluar' => 2,
                    'gol1' => 34500,
                    'gol2' => 52000,
                    'gol3' => 52000,
                    'gol4' => 69000,
                    'gol5' => 69000,
                    'gol6' => 0
                ),
                array(
                    'masuk' => 1,
                    'keluar' => 4,
                    'gol1' => 20500,
                    'gol2' => 31000,
                    'gol3' => 31000,
                    'gol4' => 41500,
                    'gol5' => 41500,
                    'gol6' => 0
                ),
                array(
                    'masuk' => 1,
                    'keluar' => 5,
                    'gol1' => 13500,
                    'gol2' => 20000,
                    'gol3' => 20000,
                    'gol4' => 27000,
                    'gol5' => 27000,
                    'gol6' => 0
                ),
                array(
                    'masuk' => 1,
                    'keluar' => 3,
                    'gol1' => 7000,
                    'gol2' => 10500,
                    'gol3' => 10500,
                    'gol4' => 14000,
                    'gol5' => 14000,
                    'gol6' => 0
                ),
                array(
                    'masuk' => 1,
                    'keluar' => 6,
                    'gol1' => 3000,
                    'gol2' => 4000,
                    'gol3' => 4000,
                    'gol4' => 5500,
                    'gol5' => 5500,
                    'gol6' => 0
                )
            ]
        );
    }
}
