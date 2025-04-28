<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class home_program extends Model
{
    use HasFactory;
    protected $table = 'home_programs';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
        'tgl_mulai',
        'tgl_selesai',
    ];

}
