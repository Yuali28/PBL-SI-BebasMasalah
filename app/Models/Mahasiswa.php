<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'nama',
        'nim',
        'angkatan',
        'kelas',
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
        return $this->belongsTo(User::class);
    }

}
