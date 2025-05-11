<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_workshop;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class homeworkshopController extends Controller
{

    public function index()
    {
        $workshops = home_workshop::all();
        return view('home_workshop.index', compact('workshops'));
    }

    public function create()
    {
        $workshops = home_workshop::all();
        return view('home_workshop.create', compact('workshops'));
    }

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

    public function edit(string $id)
    {
        $workshop = home_workshop::find($id);
        return view('home_workshop.edit', compact('workshop'));
    }

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

    public function join(home_workshop $workshop )
    {

        if (!Auth::guard('akun_user')->check()) {
            return redirect()->route('login')->with('alert', 'Silakan login terlebih dahulu');
        }

        /** @var \App\Models\AkunUser $user */
        $user = Auth::guard('akun_user')->user();

        if ($user->workshops()->where('home_workshop_id', $workshop->id)->exists()) {
            return back()->with('alert', 'Anda sudah mengikuti program ini');
        }

        $user->workshops()->attach($workshop->id);

        return back()->with('success', 'Selamat! Anda telah bergabung di program ini');
    }


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
