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

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class, 'fk_bm');
    }

}
