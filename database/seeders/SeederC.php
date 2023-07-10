<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeederC extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
    }
}
