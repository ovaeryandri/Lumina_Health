<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_post extends Model
{
    use HasFactory;
    protected $table = 'blog_post';

    protected $fillable = [
        'id_blog_categories',
        'judul',
        'slug',
        'content',
        'gambar',
        'tanggal_upload',

    ];

    public function blogCategory(){
        return $this->belongsTo(blog_category::class, 'id_blog_categories');
    }

}
