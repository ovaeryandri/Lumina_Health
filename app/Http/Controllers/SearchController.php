<?php

namespace App\Http\Controllers;

use App\Models\blogNews;
use App\Models\blogPost;
use App\Models\blogCategory;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->q;

        $categories = blogCategory::where('nama', 'like', "%{$keyword}%")->get();
        $news = blogNews::where('judul', 'like', "%{$keyword}%")
            ->get();
        $posts = blogPost::where('judul', 'like', "%{$keyword}%")
            ->get();

        return response()->json([
            'categories' => $categories,
            'news' => $news,
            'posts' => $posts,
        ]);
    }
}
