<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galery_dokumentasi extends Model
{
    use HasFactory;
    protected $table = 'galery_dokumentasi';

    protected $fillable = [
        'nama',
        'tanggal',
        'deskripsi',
    ];

}
