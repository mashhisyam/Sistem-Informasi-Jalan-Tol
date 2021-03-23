<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'sasa',
            'phonenumber' => '082222333222',
            'address' => 'malang',
            'email' => 'sasa@sistol.com',
            'password' => Hash::make('password'),
        ]);
    }
}
