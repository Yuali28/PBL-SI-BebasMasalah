<?php

namespace App\Models;

use App\Models\User;
use App\Models\BebasMasalah;
use App\Models\ProgramStudi;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BebasMasalahController;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';

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
        'jenis_kelamin',
        'fk_prodi',
        'fk_user',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'fk_mahasiswa');
    }

    public function bebasMasalah()
    {
        return $this->hasOne(BebasMasalah::class, 'fk_mahasiswa');
    }

    public function prodi()
    {
        return $this->belongsTo(ProgramStudi::class, 'fk_prodi', 'id_prodi');
    }
}
