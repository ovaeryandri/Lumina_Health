<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\blog_category;

class blogcategoryController extends Controller
{
    function index()  {
        $category = blog_category::all();
        return view('blog_category.index', compact('category'));
    }

    public function create()
    {
        $category = blog_category::all();
        return view('blog_category.create', compact('category'));
    }

    function store(Request $request)  {
        $request->validate([
            'nama' => 'required|min:5|string',
        ]);

        $slug = Str::slug($request->nama);

        blog_category::create([
            "nama" => $request->nama,
            "slug" => $slug,

        ]);
        return redirect()->route('blogcategory.index')->with('success', 'Kategori Berhasil Ditambah');
    }

    public function edit(string $id)
    {
        $category = blog_category::find($id);
        return view('blog_category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = blog_category::findOrFail($id);

        $request->validate([
            'nama' => 'required|min:5|string',
        ]);

        $slug = Str::slug($request->nama);

        $data = [
            "nama" => $request->nama,
            "slug" => $slug,
        ];

        $category->update($data);

        return redirect()->route('blogcategory.index')->with('success', 'Kategori Berhasil Diubah');
    }

    public function destroy($id)
    {
        $category = blog_category::findOrFail($id);

        $category->delete();

        return redirect()->route('blogcategory.index')->with('success', 'Kategori berhasil dihapus.');
    }
}
