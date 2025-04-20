<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_news extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'slug',
        'content',
        'gambar',
        'tanggal_upload',
        'tipe',
    ];

}
