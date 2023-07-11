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

        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa teknik alat berat//placeholder',
            'nim' => 'C020340320',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02149112682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '3',
            'fk_user' => '11',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa teknologi rekayasa otomotif//placeholder',
            'nim' => 'C020340620',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02119182682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '4',
            'fk_user' => '12',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa teknik listrik//placeholder',
            'nim' => 'C020340720',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02149172682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '5',
            'fk_user' => '13',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa elektronika//placeholder',
            'nim' => 'C020340920',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02149192682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '6',
            'fk_user' => '14',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa teknik informatika//placeholder',
            'nim' => 'C020240820',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02129182682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '7',
            'fk_user' => '15',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa TRPE//placeholder',
            'nim' => 'C020340520',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02149152682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '8',
            'fk_user' => '16',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa SIKC//placeholder',
            'nim' => 'C025340220',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02649182682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '9',
            'fk_user' => '17',
        ]);

        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa teknik rekayasa otomasi//placeholder',
            'nim' => 'C070340420',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02749182682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '10',
            'fk_user' => '18',
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
            'fk_mahasiswa' => '3',
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
            'fk_mahasiswa' => '4',
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
            'fk_mahasiswa' => '5',
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
            'fk_mahasiswa' => '6',
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
            'fk_mahasiswa' => '7',
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
            'fk_mahasiswa' => '8',
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
            'fk_mahasiswa' => '9',
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
            'fk_mahasiswa' => '10',
        ]);
    }
}
