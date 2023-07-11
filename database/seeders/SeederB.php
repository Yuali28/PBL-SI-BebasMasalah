<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeederB extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ==================== Pegawai ====================

        DB::table('pegawai')->insert([
            'nama' => 'ketua jurusan mesin',
            'dosen' => '1',
            'nik' => '0123456789101112',
            'telp' => '02179182677',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '1',
        ]);

        DB::table('pegawai')->insert([
            'nama' => 'ketua jurusan elektro',
            'dosen' => '1',
            'nik' => '0123456789101312',
            'telp' => '02259182677',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '2',
        ]);

        DB::table('pegawai')->insert([
            'nama' => 'admin prodi mesin',
            'dosen' => '1',
            'nik' => '0123456789101113',
            'telp' => '02179182678',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '3',
        ]);

        DB::table('pegawai')->insert([
            'nama' => 'admin prodi mesin otomotif',
            'dosen' => '1',
            'nik' => '0123456789101413',
            'telp' => '02179182638',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '4',
        ]);

        DB::table('pegawai')->insert([
            'nama' => 'admin TA jurusan mesin',
            'dosen' => '1',
            'nik' => '0123456789101114',
            'telp' => '02179182679',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '5',
        ]);

        DB::table('pegawai')->insert([
            'nama' => 'keuangan',
            'dosen' => '0',
            'nik' => '0123456789101115',
            'telp' => '02179182680',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '6',
        ]);

        DB::table('pegawai')->insert([
            'nama' => 'perpustakaan',
            'dosen' => '1',
            'nik' => '012345678910116',
            'telp' => '02179182681',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '7',
        ]);

        DB::table('pegawai')->insert([
            'nama' => 'admin TA jurusan elektro',
            'dosen' => '1',
            'nik' => '0123456389101114',
            'telp' => '02179172679',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '5',
        ]);
    }
}
