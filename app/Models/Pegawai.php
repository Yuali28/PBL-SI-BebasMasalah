<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'dosen';

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
        'jensi_kelamin',
        'fk_prodi',
        'fk_user',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'fk_pegawai');
    }
}
