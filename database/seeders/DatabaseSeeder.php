<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
                // ==================== Users ====================
        DB::table('users')->insert([
            'username' => 'jurusan',
            'email' => 'dosen@institusi.id',
            'password' => bcrypt('qweasdzxc'),
            'role' => '1',
            // 'fk_pegawai' => '1',
        ]);
        DB::table('users')->insert([
            'username' => 'prodi',
            'email' => 'dosen2@institusi.id',
            'password' => bcrypt('qweasdzxc'),
            'role' => '1',
            // 'fk_pegawai' => '2',
        ]);
        DB::table('users')->insert([
            'username' => 'ta',
            'email' => 'dosen3@institusi.id',
            'password' => bcrypt('qweasdzxc'),
            'role' => '1',
            // 'fk_pegawai' => '3',
        ]);
        DB::table('users')->insert([
            'username' => 'keuangan',
            'email' => 'staff@institusi.id',
            'password' => bcrypt('qweasdzxc'),
            'role' => '1',
            // 'fk_pegawai' => '4',
        ]);
        DB::table('users')->insert([
            'username' => 'perpus',
            'email' => 'staff2@institusi.id',
            'password' => bcrypt('qweasdzxc'),
            'role' => '1',
            // 'fk_pegawai' => '5',
        ]);
        DB::table('users')->insert([
            'username' => 'mahasiswa',
            'email' => 'mahasiswa@institusi.id',
            'password' => bcrypt('qweasdzxc'),
            'role' => '1',
            // 'fk_mahasiswa' => '1',
        ]);

        // ==================== Pegawai ====================
        DB::table('pegawai')->insert([
            'nama' => 'kajur//placeholder',
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
            'nama' => 'admprodi//placeholder',
            'dosen' => '1',
            'nik' => '0123456789101113',
            'telp' => '02179182678',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '2',
        ]);
        DB::table('pegawai')->insert([
            'nama' => 'admta//placeholder',
            'dosen' => '1',
            'nik' => '0123456789101114',
            'telp' => '02179182679',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '3',
        ]);
        DB::table('pegawai')->insert([
            'nama' => 'keugn//placeholder',
            'dosen' => '1',
            'nik' => '0123456789101115',
            'telp' => '02179182680',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '4',
        ]);
        DB::table('pegawai')->insert([
            'nama' => 'perpus//placeholder',
            'dosen' => '1',
            'nik' => '012345678910116',
            'telp' => '02179182681',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_user' => '5',
        ]);

        // ==================== Jurusan ====================
        DB::table('jurusan')->insert([
            'nama' => 'Teknik Mesin',
            'kode_jurusan' => 'B',
            // 'tahun_berdiri' => Carbon::parse('1987'),
            'tahun_berdiri' => 1987,
            'fk_kajur' => '1',
        ]);
        DB::table('jurusan')->insert([
            'nama' => 'Teknik Elektro',
            'kode_jurusan' => 'C',
            'tahun_berdiri' => 2003,
            'fk_kajur' => '1',
        ]);

        // ==================== Prodi ====================
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Mesin',
            'jenjang' => 'D3',
            'akreditasi' => 'A',
            'kode_prodi' => '01',
            'tahun_berdiri' => 1997,
            'fk_jurusan' => '1',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Mesin Otomotif',
            'jenjang' => 'D3',
            'akreditasi' => '-',
            'kode_prodi' => '02',
            'tahun_berdiri' => 1997,
            'fk_jurusan' => '1',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Alat Berat',
            'jenjang' => 'D3',
            'akreditasi' => 'B',
            'kode_prodi' => '03',
            'tahun_berdiri' => 2007,
            'fk_jurusan' => '1',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknologi Rekayasa Otomotif',
            'jenjang' => 'D4',
            'akreditasi' => 'B',
            'kode_prodi' => '04',
            'tahun_berdiri' => 1997,
            'fk_jurusan' => '1',
            'fk_kaprodi' => '1',
        ]);

        DB::table('program_studi')->insert([
            'nama' => 'Teknik Listrik',
            'jenjang' => 'D3',
            'akreditasi' => 'B',
            'kode_prodi' => '01',
            'tahun_berdiri' => 1997,
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Elektronika',
            'jenjang' => 'D3',
            'akreditasi' => 'B',
            'kode_prodi' => '02',
            'tahun_berdiri' => 2003,
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Informatika',
            'jenjang' => 'D3',
            'akreditasi' => 'A',
            'kode_prodi' => '03',
            'tahun_berdiri' => 2009,
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Rekyasa Pembangkit Energi',
            'jenjang' => 'D4',
            'akreditasi' => 'B',
            'kode_prodi' => '04',
            'tahun_berdiri' => 2020,
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Sistem Informasi Kota Cerdas',
            'jenjang' => 'D4',
            'akreditasi' => 'B',
            'kode_prodi' => '05',
            'tahun_berdiri' => 2020,
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Rekayasa Otomasi',
            'jenjang' => 'D4',
            'akreditasi' => '-',
            'kode_prodi' => '06',
            'tahun_berdiri' => 2022,
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);

        // ==================== Mahasiswa ====================
        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa//placeholder',
            'nim' => 'C030340420',
            'angkatan' => '2040',
            'kelas' => 'A',
            'telp' => '02179182682',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => '0',
            'fk_prodi' => '1',
            'fk_user' => '6',
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
    }
}
