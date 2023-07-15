<?php

namespace App\Models;

use App\Models\Pegawai;
use App\Models\ProgramStudi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';
    protected $primaryKey = 'id_jurusan';

    protected $guarded = [
        'id'
    ];

    public function prodi()
    {
        return $this->hasOne(ProgramStudi::class, 'fk_jurusan');
    }

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class, 'fk_jurusan');
    }

    public function mahasiswa(): HasManyThrough
    {
        return $this->through('prodi')->has('mahasiswa');
    }
}
