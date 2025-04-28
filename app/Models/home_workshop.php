<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_workshop extends Model
{
    use HasFactory;
    protected $table = 'home_workshops';

    protected $fillable = [
        'judul',
        'deskripsi',
        'lokasi',
        'waktu_mulai',
        'waktu_selesai',
        'maks_kapasitas',
        'gambar',
    ];
}
