<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeederF extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('berita')->insert([
            'thumbnail_berita' => 'gambar',
            'judul_berita' => 'Pelaksanaan Yudisium',
            'konten_berita' => 'Lorem',
            'berita_utama' => '1',
            'status_berita' => '1',
        ]);
        DB::table('berita')->insert([
            'thumbnail_berita' => 'gambar',
            'judul_berita' => 'Pelaksanaan Yudisium2',
            'konten_berita' => 'Lorem',
            'berita_utama' => '1',
            'status_berita' => '1',
        ]);DB::table('berita')->insert([
            'thumbnail_berita' => 'gambar',
            'judul_berita' => 'Pelaksanaan Yudisium3',
            'konten_berita' => 'Lorem',
            'berita_utama' => '1',
            'status_berita' => '1',
        ]);DB::table('berita')->insert([
            'thumbnail_berita' => 'gambar',
            'judul_berita' => 'Pelaksanaan Yudisium4',
            'konten_berita' => 'Lorem',
            'berita_utama' => '1',
            'status_berita' => '1',
        ]);
    }
}
