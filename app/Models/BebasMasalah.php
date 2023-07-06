<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BebasMasalah extends Model
{
    use HasFactory;

    protected $table = 'bebas_masalah';

    public function mahasiswa()
    {
        return $this->hasOne(Mahasiswa::class);
    }

}
