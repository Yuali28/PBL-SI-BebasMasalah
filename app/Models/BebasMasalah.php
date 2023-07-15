<?php

namespace App\Models;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BebasMasalah extends Model
{
    use HasFactory;

    protected $table = 'bebas_masalah';
    protected $primaryKey = 'id_bm';

    protected $fillable = [
        'lembar_persetujuan', 'lembar_pengesahan', 'lembar_konsutasi_dospem_1', 'lembar_konsutasi_dospem_2', 'lembar_revisi',
        'note_ta', 'note_keuangan', 'note_perpustakaan',
        'update_note_ta', 'update_note_keuangan', 'update_note_perpus',
        'status_ta', 'status_keuangan', 'status_perpus',
        'tahun_lulus',
        'fk_mahasiswa'
    ];

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'fk_bm');
    }

}
