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
            ],
            [
                'kode' => 'B0003',
                'judul' => 'Pengantar Filsafat Pendidikan',
                'pengarang' => 'Drs. Uyoh Sadulloh, M.pd',
                'penerbit' => 'Alfabeta, CV',
                'tahun' => '2004',
                'jenis' => 'Edukasi'
            ],
            [
                'kode' => 'B0004',
                'judul' => 'TUILET',
                'pengarang' => 'Oben Cedric',
                'penerbit' => 'Gradien Mediatama',
                'tahun' => '2009',
                'jenis' => 'Novel'
            ],
            [
                'kode' => 'B0005',
                'judul' => 'Dear Nathan',
                'pengarang' => 'Erisca Febrianti',
                'penerbit' => 'Best Media',
                'tahun' => '2016',
                'jenis' => 'Novel'
            ],
            [
                'kode' => 'B0006',
                'judul' => 'Perahu Kertas',
                'pengarang' => 'Dewi Lestari (Dee)',
                'penerbit' => 'Treudee Pustaka Sejati dan Bentang Pustaka',
                'tahun' => '2004',
                'jenis' => 'Edukasi'
            ]
        ]);        
    }
}
