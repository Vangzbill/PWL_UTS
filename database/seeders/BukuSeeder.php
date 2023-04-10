<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            [
                'kode' => 'B0001',
                'judul' => 'Tips & Trik Jago Main Rubik',
                'pengarang' => 'Wicaksono Hadi',
                'penerbit' => 'Gradien Mediatama',
                'tahun' => '2009',
                'jenis' => 'Edukasi'
            ],
            [
                'kode' => 'B0002',
                'judul' => 'Cewek Smart',
                'pengarang' => 'Ria Fariana',
                'penerbit' => 'Gema Insani',
                'tahun' => '2008',
                'jenis' => 'Edukasi'
            ]
        ]);        
    }
}
