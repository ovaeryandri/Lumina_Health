<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class blogCategory extends Model
{
    use HasFactory;
    protected $table = 'blog_category';

    protected $fillable = [
        'nama',
        'slug',
    ];

    public function blogPost()
    {
        return $this->belongsTo(blog_post::class, 'id_blog_categories');
    }

    public function newsCategory()
    {
        return $this->hasMany(BlogNews::class, 'id_blog_category');
    }

    public function postCategory()
    {
        return $this->hasMany(blogPost::class, 'id_blog_category');
    }
}
