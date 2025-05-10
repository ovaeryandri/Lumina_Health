<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\blogPost;
use Illuminate\Support\Str;
use App\Models\blogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogPostController extends Controller
{
    public function index()
    {
        $post = blogPost::all();
        $category = blogCategory::all();
        return view('blog_post.index', compact('post', 'category'));
    }

    public function show($slug)
    {
        $post = blogPost::where('slug', $slug)->firstOrFail();

        return view('blog_post.show', compact('post'));
    }

    public function create()
    {
        $categories = blogCategory::all();
        $post = blogPost::all();
        return view('blog_post.create', compact('post', 'categories'));
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

        blogPost::create([
            "judul" => $request->judul,
            "slug" => $slug,
            "content" => $request->content,
            "gambar" => $filePath,
            "tanggal_upload" => $tanggal_upload,
            "id_blog_category" => $request->id_blog_category,
        ]);

        return redirect()->route('blogpost.index')->with('success', 'Blog Post Berhasil Ditambah');
    }

    public function edit(string $slug)
    {
        $post = blogPost::where('slug', $slug)->firstOrFail();
        $categories = blogCategory::all();

        return view('blog_post.edit', compact('post', 'categories'));
    }

    public function update(Request $request, $slug)
    {
        $news = blogPost::where('slug', $slug)->firstOrFail();

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

        return redirect()->route('blogpost.index')->with('success', 'Blog Post berhasil diperbarui.');
    }

    public function destroy($slug)
    {
        $news = blogPost::where('slug', $slug)->firstOrFail();
        $news->delete();

        return redirect()->route('blogpost.index')->with('success', 'Blog Post berhasil dihapus.');
    }
}
