<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\blogNews;
use Illuminate\Support\Str;
use App\Models\blogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogNewsController extends Controller
{
    public function index()
    {
        $news = blogNews::all();
        $category = blogCategory::all();
        return view('blog_news.index', compact('news', 'category'));
    }

    public function show($slug)
    {
        $news = blogNews::where('slug', $slug)->firstOrFail();

        return view('blog_news.show', compact('news'));
    }

    public function create()
    {
        $categories = blogCategory::all();
        $news = blogNews::all();
        return view('blog_news.create', compact('news', 'categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:5|string',
            'content' => 'required|min:5|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_upload' => 'required|date',
            'id_blog_category' => 'required|exists:blog_category,id',
        ]);

        $filePath = $request->file('gambar')->store('program_files', 'public');
        $tanggal_upload = Carbon::parse($request->tanggal_upload);

        $slug = Str::slug($request->judul);

        blogNews::create([
            "judul" => $request->judul,
            "slug" => $slug,
            "content" => $request->content,
            "gambar" => $filePath,
            "tanggal_upload" => $tanggal_upload,
            "id_blog_category" => $request->id_blog_category,
        ]);

        return redirect()->route('blognews.index')->with('success', 'Blog Berita Berhasil Ditambah');
    }

    public function edit(string $slug)
    {
        $news = blogNews::where('slug', $slug)->firstOrFail();
        $categories = blogCategory::all();

        return view('blog_news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $news = BlogNews::where('slug', $slug)->firstOrFail();

        $request->validate([
            'judul' => 'required|string|min:5',
            'content' => 'required|string|min:5',
            'id_blog_category' => 'required|exists:blog_category,id',
            'tanggal_upload' => 'required|date',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $slug = Str::slug($request->judul);

        $data = [
            'judul' => $request->judul,
            'slug' => $slug,
            'content' => $request->content,
            'id_blog_category' => $request->id_blog_category,
            'tanggal_upload' => $request->tanggal_upload,
            'gambar' => $news->gambar,
        ];

        if ($request->hasFile('gambar')) {
            if ($news->gambar) {
                Storage::disk('public')->delete($news->gambar);
            }
            $filePath = $request->file('gambar')->store('program_files', 'public');
            $data['gambar'] = $filePath;
        }

        $news->update($data);

        return redirect()->route('blognews.index')->with('success', 'Berita berhasil diperbarui.');
    }

    public function destroy($slug)
    {
        $news = blogNews::where('slug', $slug)->firstOrFail();
        $news->delete();

        return redirect()->route('blognews.index')->with('success', 'Blog Berita berhasil dihapus.');
    }
}
