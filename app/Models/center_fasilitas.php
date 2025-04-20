<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class center_fasilitas extends Model
{
    use HasFactory;
    protected $table = 'center_fasilitas';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];

}
