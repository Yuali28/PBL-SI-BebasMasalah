<?php

namespace App\Models;

use App\Models\Jurusan;
use App\Models\Pegawai;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramStudi extends Model
{
    use HasFactory;

    protected $table = 'program_studi';
    protected $primaryKey = 'id_prodi';

    protected $guarded = [
        'id_prodi'
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'fk_jurusan', 'id_jurusan');
    }

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'fk_prodi');
    }

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'fk_prodi');
    }
}
