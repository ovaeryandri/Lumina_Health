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
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'nama' => 'required|min:5|string',
            'deskripsi' => 'required|min:5|string',
            'download' => 'required|file|mimes:pdf,doc,docx|max:2048',
        ]);
        $gambarPath = $request->file('gambar')->store('program_files','public');

        $filePath = $request->file('download')->store('program_files','public');

        download_ebook::create([
            "gambar" => $gambarPath,
            "nama" => $request->nama,
            "deskripsi" => $request->deskripsi,
            "download" => $filePath,
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
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'nama' => 'required|min:5|string',
        'deskripsi' => 'required|min:5|string',
        'download' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
    ]);

    $data = [
        "nama" => $request->nama,
        "deskripsi" => $request->deskripsi,
    ];

    // Jika user upload gambar baru
    if($request->hasFile('gambar')) {
        if($ebook->gambar){
            Storage::disk('public')->delete($ebook->gambar);
        }
        $gambarPath = $request->file('gambar')->store('program_files','public');
        $data['gambar'] = $gambarPath;
    }

    if($request->hasFile('download')) {
        if($ebook->download){
            Storage::disk('public')->delete($ebook->download);
        }
        $filePath = $request->file('download')->store('program_files','public');
        $data['download'] = $filePath;
    }

    // Selalu update data meskipun tanpa gambar baru
    $ebook->update($data);

    return redirect()->route('downloadebook.index')->with('success', 'Ebook Berhasil Diubah');
}


public function destroy($id)
{
    $ebook = download_ebook::findOrFail($id);


    if ($ebook->gambar) {
        Storage::disk('public')->delete($ebook->gambar);
    }

    if ($ebook->download) {
        Storage::disk('public')->delete($ebook->download);
    }

    $ebook->delete();

    return redirect()->route('downloadebook.index')->with('success', 'Ebook berhasil dihapus.');
}

}
