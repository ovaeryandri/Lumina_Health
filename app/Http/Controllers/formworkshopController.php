<?php

namespace App\Http\Controllers;
use App\Models\form_workshops;
use App\Models\home_workshop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class formworkshopController extends Controller
{

    public function index(){
        $workshop = form_workshops::all();
        return view('form_workshop.index', compact('workshop'));
    }

    public function create(){
        $workshop = form_workshops::all();
        return view('form_workshop.create', compact('workshop'));
    }

    public function show(){
        $workshop = form_workshops::all();
        return view('home', compact('workshop'));
    }

    public function store(Request $request, $id){
        $workshop = home_workshop::findOrFail($id);

    if ($workshop->isFull()) {
        return back()->with('error', 'Kuota penuh');
    }

    // Cek apakah user sudah daftar
    $sudahDaftar = form_workshops::where('id_akun_user', Auth::id())
        ->where('id_home_workshops', $id)
        ->exists();

    if ($sudahDaftar) {
        return back()->with('error', 'Anda sudah mendaftar workshop ini.');
    }

    // Validasi input
    $request->validate([
        'nama' => 'required',
        'alamat' => 'required',
        'no_hp' => 'required',
        'tujuan' => 'required',
    ]);

    // Simpan ke database
    form_workshops::create([
        'id_akun_user' => Auth::id(),
        'id_home_workshops' => $id,
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'no_hp' => $request->no_hp,
        'tujuan' => $request->tujuan,
    ]);

    return redirect()->route('')->with('success', 'Berhasil mendaftar.');
    }
}
