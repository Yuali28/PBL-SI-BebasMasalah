<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeederD extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ==================== Mahasiswa ====================
        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa teknik mesin//placeholder',
            'nim' => 'C030340420',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02179182682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '1',
            'fk_user' => '8',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa teknik mesin otomotif//placeholder',
            'nim' => 'C020340420',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02149182682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '2',
            'fk_user' => '9',
        ]);

        // ==================== Bebas Masalah ====================
        DB::table('bebas_masalah')->insert([
            'tahun_lulus' => 2004,
            'status_perpus' => '0',
            'note_perpus' => '-',
            'update_note_perpus' => Carbon::parse('2042-03-16 15:45'),
            'status_keuangan' => '0',
            'note_keuangan' => '-',
            'update_note_keuangan' => Carbon::parse('2042-03-16 15:45'),
            'status_ta' => '0',
            'note_ta' => '-',
            'update_note_ta' => Carbon::parse('2042-03-16 15:45'),
            'fk_mahasiswa' => '1',
        ]);

        DB::table('bebas_masalah')->insert([
            'tahun_lulus' => 2004,
            'status_perpus' => '0',
            'note_perpus' => '-',
            'update_note_perpus' => Carbon::parse('2042-03-16 15:45'),
            'status_keuangan' => '0',
            'note_keuangan' => '-',
            'update_note_keuangan' => Carbon::parse('2042-03-16 15:45'),
            'status_ta' => '0',
            'note_ta' => '-',
            'update_note_ta' => Carbon::parse('2042-03-16 15:45'),
            'fk_mahasiswa' => '2',
        ]);
    }
}
