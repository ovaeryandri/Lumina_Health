<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class center_history extends Model
{
    use HasFactory;
    protected $table = 'center_history';

    protected $fillable = [
        'judul',
        'deskripsi',
        'gambar',
    ];

}
