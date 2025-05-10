<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class blogPost extends Model
{
    use HasFactory;

    protected $table = 'blog_posts';

    protected $fillable = [
        'id_blog_category',
        'judul',
        'slug',
        'content',
        'gambar',
        'tanggal_upload',
    ];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'id_blog_category');
    }
}
