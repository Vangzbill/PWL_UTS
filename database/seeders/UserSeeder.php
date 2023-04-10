<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'virgy27',
                'name' => 'Virgy Ferdian',
                'email' => 'virgyferdian213@gmail.com',
                'password' => Hash::make('1234')
            ],
            [
                'username' => 'sabil22',
                'name' => 'Sabilla Luthfi',
                'email' => 'sabilla@gmail.com',
                'password' => Hash::make('1234')
            ]
        ]);
    }
}
