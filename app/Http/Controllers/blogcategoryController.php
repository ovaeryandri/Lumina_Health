<?php

namespace App\Http\Controllers;

use App\Models\blogPost;
use Illuminate\Support\Str;
use App\Models\blogCategory;
use App\Models\blogNews;
use Illuminate\Http\Request;

class blogcategoryController extends Controller
{
    public function index()
    {
        $category = blogCategory::all();
        return view('blog_category.index', compact('category'));
    }

    public function show($slug)
    {
        $category = BlogCategory::where('slug', $slug)->firstOrFail();
        $blogNews = BlogNews::where('id_blog_category', $category->id)->get();
        $blogPost = blogPost::where('id_blog_category', $category->id)->get();

        return view('blog_category.show', compact('category', 'blogNews', 'blogPost'));
    }

    public function create()
    {
        $category = blogCategory::all();
        return view('blog_category.create', compact('category'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5|string',
        ]);

        $slug = Str::slug($request->nama);

        blogCategory::create([
            "nama" => $request->nama,
            "slug" => $slug,
        ]);

        return redirect()->route('blogcategory.index')->with('success', 'Kategori Berhasil Ditambah');
    }

    public function edit(string $slug)
    {
        $category = blogCategory::where('slug', $slug)->firstOrFail();
        return view('blog_category.edit', compact('category'));
    }

    public function update(Request $request, $slug)
    {
        $category = blogCategory::where('slug', $slug)->firstOrFail();

        $request->validate([
            'nama' => 'required|min:5|string',
        ]);

        $newSlug = Str::slug($request->nama);

        $category->update([
            "nama" => $request->nama,
            "slug" => $newSlug,
        ]);

        return redirect()->route('blogcategory.index')->with('success', 'Kategori Berhasil Diubah');
    }

    public function destroy($slug)
    {
        $category = blogCategory::where('slug', $slug)->firstOrFail();
        $category->delete();

        return redirect()->route('blogcategory.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
