<?php

namespace App\Models;

use App\Models\User;
use App\Models\Jurusan;
use App\Models\ProgramStudi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';

    protected $fillable = [
        'nama',
        'dosen',
        'nik',
        'nip',
        'nidn',
        'telp',
        'alamat',
        'tanggal_lahir',
        'agama',
        'jenis_kelamin',
        'fk_prodi',
        'fk_jurusan',
        'fk_user',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'fk_pegawai');
    }

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'fk_jurusan', 'id_jurusan');
    }

    public function prodi()
    {
        return $this->belongsTo(ProgramStudi::class, 'fk_prodi', 'id_prodi');
    }
}
