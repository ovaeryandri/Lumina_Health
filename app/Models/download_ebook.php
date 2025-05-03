<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class download_ebook extends Model
{
    use HasFactory;
    protected $table = 'download_ebooks';

    protected $fillable = [
        'gambar',
        'nama',
        'deskripsi',
        'download',
    ];

}
