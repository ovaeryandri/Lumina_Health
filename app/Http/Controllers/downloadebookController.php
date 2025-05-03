<?php

namespace App\Http\Controllers;
use App\Models\download_ebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class downloadebookController extends Controller
{
    public function index(){
        $ebook = download_ebook::all();
        return view('ebook.index', compact('ebook'));
    }

    public function create(){
        $ebook = download_ebook::all();
        return view('ebook.create', compact('ebook'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|min:5|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|min:5|string',
            'download' => 'required|min:5|string',
        ]);
        $filePath = $request->file('gambar')->store('program_files','public');

        download_ebook::create([
            "nama" => $request->nama,
            "gambar" => $filePath,
            "deskripsi" => $request->deskripsi,
            "download" => $request->download,
        ]);
        return redirect()->route('downloadebook.index')->with('success', 'Ebook Berhasil Ditambah');
}

public function edit($id){
    $ebook = download_ebook::find($id);
    return view('ebook.edit', compact('ebook'));
}

public function update(Request $request, $id){
    $ebook = download_ebook::findOrFail($id);

    $request->validate([
        'nama' => 'min:5|string',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'deskripsi' => 'min:5|string',
        'download' => 'min:5|string',
    ]);


    $data = [
        "nama" => $request->nama,
        "deskripsi" => $request->deskripsi,
        "download" => $request->download,
    ];

    if($request->hasFile('gambar')){
        if($ebook->gambar){
            Storage::disk('public')->delete($ebook->gambar);
            $filePath = $request->file('gambar')->store('program_files','public');
            $data['gambar'] = $filePath;
        }

        $ebook->update($data);

        return redirect()->route('downloadebook.index')->with('success', 'Ebook Berhasil Diubah');
    }
}

public function destroy($id)
{
    $ebook = download_ebook::findOrFail($id);


    if ($ebook->gambar) {
        Storage::disk('public')->delete($ebook->gambar);
    }

    $ebook->delete();

    return redirect()->route('downloadebook.index')->with('success', 'Ebook berhasil dihapus.');
}

}
