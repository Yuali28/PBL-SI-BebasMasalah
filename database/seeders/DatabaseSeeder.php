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
        DB::table('users')->insert([
            'username' => 'dosen',
            'email' => 'dosen@institusi.id',
            'password' => bcrypt('qweasdzxc'),
            'role' => '1',
            'fk_pegawai' => '1',
        ]);
        DB::table('users')->insert([
            'username' => 'mahasiswa',
            'email' => 'mahasiswa@institusi.id',
            'password' => bcrypt('qweasdzxc'),
            'role' => '1',
            'fk_pegawai' => '1',
        ]);


        DB::table('pegawai')->insert([
            'nama' => 'dosen//placeholder',
            'dosen' => '1',
            'nik' => '0123456789101112',
            'telp' => '02179182676',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => 'laki-laki',
        ]);
        DB::table('mahasiswa')->insert([
            'nama' => 'mahasiswa//placeholder',
            'dosen' => '1',
            'nik' => '0123456789101112',
            'telp' => '02179182676',
            'alamat' => 'Jalan-jalan yang lurus',
            'tanggal_lahir' => Carbon::parse('2000-01-01'),
            'agama' => 'Buddha',
            'jenis_kelamin' => 'laki-laki',
        ]);

        // ==================== Jurusan ====================
        DB::table('jurusan')->insert([
            'nama' => 'Teknik Mesin',
            'kode' => 'B',
            'tahun_berdiri' => Carbon::parse('1987'),
            'fk_kajur' => '1',
        ]);
        DB::table('jurusan')->insert([
            'nama' => 'Teknik Elektro',
            'kode' => 'C',
            'tahun_berdiri' => Carbon::parse('2003'),
            'fk_kajur' => '1',
        ]);

        // ==================== Prodi ====================
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Mesin',
            'jenjang' => 'D3',
            'akreditasi' => 'A',
            'kode_prodi' => '01',
            'tahun_berdiri' => Carbon::parse('1997'),
            'fk_jurusan' => '1',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Mesin Otomotif',
            'jenjang' => 'D3',
            'akreditasi' => '-',
            'kode_prodi' => '02',
            'tahun_berdiri' => Carbon::parse('1997'),
            'fk_jurusan' => '1',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Alat Berat',
            'jenjang' => 'D3',
            'akreditasi' => 'B',
            'kode_prodi' => '03',
            'tahun_berdiri' => Carbon::parse('2007'),
            'fk_jurusan' => '1',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknologi Rekayasa Otomotif',
            'jenjang' => 'D4',
            'akreditasi' => 'B',
            'kode_prodi' => '04',
            'tahun_berdiri' => Carbon::parse('1997'),
            'fk_jurusan' => '1',
            'fk_kaprodi' => '1',
        ]);

        DB::table('program_studi')->insert([
            'nama' => 'Teknik Listrik',
            'jenjang' => 'D3',
            'akreditasi' => 'B',
            'kode_prodi' => '01',
            'tahun_berdiri' => Carbon::parse('1997'),
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Elektronika',
            'jenjang' => 'D3',
            'akreditasi' => 'B',
            'kode_prodi' => '02',
            'tahun_berdiri' => Carbon::parse('2003'),
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Informatika',
            'jenjang' => 'D3',
            'akreditasi' => 'A',
            'kode_prodi' => '03',
            'tahun_berdiri' => Carbon::parse('2009'),
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Rekyasa Pembangkit Energi',
            'jenjang' => 'D4',
            'akreditasi' => 'B',
            'kode_prodi' => '04',
            'tahun_berdiri' => Carbon::parse('2020'),
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Sistem Informasi Kota Cerdas',
            'jenjang' => 'D4',
            'akreditasi' => 'B',
            'kode_prodi' => '05',
            'tahun_berdiri' => Carbon::parse('2020'),
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
        DB::table('program_studi')->insert([
            'nama' => 'Teknik Rekayasa Otomasi',
            'jenjang' => 'D4',
            'akreditasi' => '-',
            'kode_prodi' => '06',
            'tahun_berdiri' => Carbon::parse('2022'),
            'fk_jurusan' => '2',
            'fk_kaprodi' => '1',
        ]);
    }
}
