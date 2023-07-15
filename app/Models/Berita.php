<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{

    protected $table = 'berita';
    protected $primaryKey = 'id_berita';

    protected $fillable = [
        'thumbnail_berita',
        'judul_berita',
        'konten_berita',
        'status_berita',
        'berita_utama',
    ];


    use HasFactory;
}
