<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $table = 'jurusan';

    protected $guarded = [
        'id'
    ];

    public function programstudi()
    {
        return $this->hasOne(ProgramStudi::class, 'fk_jurusan');
    }
}
