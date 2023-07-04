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

        // ==================== Update Pegawai ====================
        DB::table('pegawai')->where('id_pegawai', 1)
        ->update(['fk_jurusan' => 1]);

        DB::table('pegawai')->where('id_pegawai', 2)
        ->update(['fk_jurusan' => 2]);

        DB::table('pegawai')->where('id_pegawai', 3)
        ->update(['fk_prodi' => 1]);

        DB::table('pegawai')->where('id_pegawai', 4)
        ->update(['fk_prodi' => 2]);
    }
}
