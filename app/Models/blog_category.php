<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_category extends Model
{
    use HasFactory;
    protected $table = 'blog_category';

    protected $fillable = [
        'nama',
        'slug',
    ];

    public function blogPost(){
        return $this->belongsTo(blog_post::class, 'id_blog_categories');
    }
}
