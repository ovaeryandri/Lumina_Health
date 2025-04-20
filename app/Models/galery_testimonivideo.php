<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galery_testimonivideo extends Model
{
    use HasFactory;
    protected $table = 'galery_testimonivideo';

    protected $fillable = [
        'judul',
        'deskripsi',
        'file_video',
    ];

}
