<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert(
            [
                'name' => 'Hamza Semmak',
                'email' => 'Hamza@gmail.com',
                'password' => Hash::make('AA102374'),
            ],
            [
                'name' => 'Bilal El Basri',
                'email' => 'Bilal@gmail.com',
                'password' => Hash::make('Bilal123'),
            ]
        );
    }
}
