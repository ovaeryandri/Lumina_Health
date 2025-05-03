<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_workshop;
use App\Models\akun_user;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class homeworkshopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workshops = home_workshop::all();
        return view('home_workshop.index', compact('workshops'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $workshops = home_workshop::all();
        return view('home_workshop.create', compact('workshops'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:5|string',
            'deskripsi' => 'required|min:5|string',
            'lokasi' => 'required|string',
            'maks_kapasitas' => 'required|integer',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'required|date|after_or_equal:waktu_mulai',
        ]);
        $filePath = $request->file('gambar')->store('program_files', 'public');
        $waktu_mulai = Carbon::parse($request->waktu_mulai);
        $waktu_selesai = Carbon::parse($request->waktu_selesai);

        home_workshop::create([
            "judul" => $request->judul,
            "deskripsi" => $request->deskripsi,
            "lokasi" => $request->lokasi,
            "maks_kapasitas" => $request->maks_kapasitas,
            "gambar" => $filePath,
            "waktu_mulai" => $waktu_mulai,
            "waktu_selesai" => $waktu_selesai,

        ]);
        return redirect()->route('homeworkshop.index')->with('success', 'Workshop Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $workshop = home_workshop::find($id);
        return view('home_workshop.edit', compact('workshop'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $workshop = home_workshop::findOrFail($id);

    $request->validate([
        'judul' => 'min:5|string',
        'deskripsi' => 'min:5|string',
        'lokasi' => 'string',
        'maks_kapasitas' => 'integer',
        'gambar' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        'waktu_mulai' => 'date',
        'waktu_selesai' => 'date|after_or_equal:waktu_mulai',
    ]);

    $data = [
        "judul" => $request->judul,
        "deskripsi" => $request->deskripsi,
        "lokasi" => $request->lokasi,
        "waktu_mulai" => Carbon::parse($request->waktu_mulai),
        "waktu_selesai" => Carbon::parse($request->waktu_selesai),
        "maks_kapasitas" => $request->maks_kapasitas,
    ];

    if ($request->hasFile('gambar')) {
        if ($workshop->gambar) {
            Storage::disk('public')->delete($workshop->gambar);
        }
        $filePath = $request->file('gambar')->store('program_files', 'public');
        $data['gambar'] = $filePath;
    }

    $workshop->update($data);

    return redirect()->route('homeworkshop.index')->with('success', 'Workshop Berhasil Diubah');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $workshop = home_workshop::findOrFail($id);


        if ($workshop->gambar) {
            Storage::disk('public')->delete($workshop->gambar);
        }

        $workshop->delete();

        return redirect()->route('homeworkshop.index')->with('success', 'Workshop berhasil dihapus.');
    }

}
