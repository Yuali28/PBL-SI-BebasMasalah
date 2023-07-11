<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeederE extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ==================== Update Users ====================
        DB::table('users')->where('id_user', 1)
        ->update(['fk_pegawai' => 1]);

        DB::table('users')->where('id_user', 2)
        ->update(['fk_pegawai' => 2]);

        DB::table('users')->where('id_user', 3)
        ->update(['fk_pegawai' => 3]);

        DB::table('users')->where('id_user', 4)
        ->update(['fk_pegawai' => 4]);

        DB::table('users')->where('id_user', 5)
        ->update(['fk_pegawai' => 5]);

        DB::table('users')->where('id_user', 6)
        ->update(['fk_pegawai' => 6]);

        DB::table('users')->where('id_user', 7)
        ->update(['fk_pegawai' => 7]);

        DB::table('users')->where('id_user', 8)
        ->update(['fk_mahasiswa' => 1]);

        DB::table('users')->where('id_user', 9)
        ->update(['fk_mahasiswa' => 2]);

        DB::table('users')->where('id_user', 10)
        ->update(['fk_pegawai' => 8]);

        DB::table('users')->where('id_user', 11)
        ->update(['fk_mahasiswa' => 3]);

        DB::table('users')->where('id_user', 12)
        ->update(['fk_mahasiswa' => 4]);

        DB::table('users')->where('id_user', 13)
        ->update(['fk_mahasiswa' => 5]);

        DB::table('users')->where('id_user', 14)
        ->update(['fk_mahasiswa' => 6]);

        DB::table('users')->where('id_user', 15)
        ->update(['fk_mahasiswa' => 7]);

        DB::table('users')->where('id_user', 16)
        ->update(['fk_mahasiswa' => 8]);

        DB::table('users')->where('id_user', 17)
        ->update(['fk_mahasiswa' => 9]);

        DB::table('users')->where('id_user', 18)
        ->update(['fk_mahasiswa' => 10]);

        // ==================== Update Pegawai ====================
        DB::table('pegawai')->where('id_pegawai', 1)
        ->update(['fk_jurusan' => 1]);

        DB::table('pegawai')->where('id_pegawai', 2)
        ->update(['fk_jurusan' => 2]);

        DB::table('pegawai')->where('id_pegawai', 3)
        ->update(['fk_prodi' => 1]);

        DB::table('pegawai')->where('id_pegawai', 4)
        ->update(['fk_prodi' => 2]);

        DB::table('pegawai')->where('id_pegawai', 5)
        ->update(['fk_jurusan' => 1]);

        DB::table('pegawai')->where('id_pegawai', 8)
        ->update(['fk_jurusan' => 2]);

        // ==================== Update Users ====================
        DB::table('mahasiswa')->where('id_mahasiswa', 1)
        ->update(['fk_bm' => 1]);

        DB::table('mahasiswa')->where('id_mahasiswa', 2)
        ->update(['fk_bm' => 2]);

        DB::table('mahasiswa')->where('id_mahasiswa', 3)
        ->update(['fk_bm' => 3]);

        DB::table('mahasiswa')->where('id_mahasiswa', 4)
        ->update(['fk_bm' => 4]);

        DB::table('mahasiswa')->where('id_mahasiswa', 5)
        ->update(['fk_bm' => 5]);

        DB::table('mahasiswa')->where('id_mahasiswa', 6)
        ->update(['fk_bm' => 6]);

        DB::table('mahasiswa')->where('id_mahasiswa', 7)
        ->update(['fk_bm' => 7]);

        DB::table('mahasiswa')->where('id_mahasiswa', 8)
        ->update(['fk_bm' => 8]);

        DB::table('mahasiswa')->where('id_mahasiswa', 9)
        ->update(['fk_bm' => 9]);

        DB::table('mahasiswa')->where('id_mahasiswa', 10)
        ->update(['fk_bm' => 10]);
    }
}
