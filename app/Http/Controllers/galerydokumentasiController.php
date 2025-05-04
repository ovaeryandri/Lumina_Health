<?php

namespace App\Http\Controllers;
use App\Models\galery_dokumentasi;
use Illuminate\Http\Request;

class galerydokumentasiController extends Controller
{
    public function index(){
        $galeri = galery_dokumentasi::all();
        return view('galeri.index',compact('galeri'));
    }

    public function create(){
        $galeri = galery_dokumentasi::all();
        return view('galeri.create',compact('galeri'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|min:5|string',
            'tanggal' => 'required|date',
            'deskripsi' => 'required|min:5|string',
        ]);

        galery_dokumentasi::create([
            "nama" => $request->nama,
            "tanggal" => $request->tanggal,
            "deskripsi" => $request->deskripsi,
        ]);
        return redirect()->route('galerydokumentasi.index')->with('success', 'Galery Berhasil Ditambah');
}


public function edit(galery_dokumentasi $galeri, $id){
    $galeri = galery_dokumentasi::find($id);
    $galeri->tanggal = \Carbon\Carbon::parse($galeri->tanggal)->format('Y-m-d');
    return view('galeri.edit', compact('galeri'));
}

public function update(Request $request, galery_dokumentasi $galeri, $id){
    $galeri = galery_dokumentasi::findOrFail($id);

    $request->validate([
        'nama' => 'min:5|string',
        'tanggal' => 'date',
        'deskripsi' => 'min:5|string',
    ]);

    $galeri->update([
        "nama" => $request->nama,
        "tanggal" => $request->tanggal,
        "deskripsi" => $request->deskripsi,
    ]);

    return redirect()->route('galerydokumentasi.index')->with('success', 'Galery Berhasil Diupdate');
}

public function destroy(galery_dokumentasi $galeri){
    $galeri->delete();

    return redirect()->route('galerydokumentasi.index')->with('success', 'Galery Berhasil Dihapus');
}

}
