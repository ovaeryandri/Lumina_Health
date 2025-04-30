<?php

namespace App\Http\Controllers;
use App\Models\about_staff;
use Illuminate\Http\Request;

class aboutstaffController extends Controller
{
    public function index(){
        $staf = about_staff::all();
        return view('about_staf.index');
    }

    public function create(){
        $staf = about_staff::all();
        return view('about_staf.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|min:5|string',
            'judul' => 'required|min:5|string',
            'spesialisasi' => 'required|min:5|string',
            'bio' => 'required|min:5|string',
            'tahun_pengalaman' => 'required|min:5|string',
            'email' => 'required|min:5|string',
            'no_hp' => 'required|min:5|string',
            'foto_profil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $filePath = $request->file('foto_profil')->store('program_files','public');

        about_staff::create([
            "nama" => $request->nama,
            "judul" => $request->judul,
            "spesialisasi" => $request->spesialisasi,
            "bio" => $request->bio,
            "tahun_pengalaman" => $request->tahun_pengalaman,
            "emial" => $request->emial,
            "no_hp" => $request->no_hp,
            "foto_profil" => $filePath,
        ]);
        return redirect()->route('aboutstaff.index')->with('success', 'Staf Berhasil Ditambah');
}

// public function edit(about_staff $staf){
//     return view('about_staf.edit', compact('admin'));
// }

// public function update(Request $request, about_staff $staf){
//     $request->validate([
//         'nama' => 'required|min:5|string',
//         'judul' => 'required|min:5|string',
//         'spesialisasi' => 'required|min:5|string',
//         'bio' => 'required|min:5|string',
//         'tahun_pengalaman' => 'required|min:5|string',
//         'email' => 'required|min:5|string',
//         'no_hp' => 'required|min:5|string',
//         'foto_profil' => 'required|min:5|string',
//     ]);

//     $staf->nama = $request->nama;

//     if ($request->filled('password')) {
//         $staf->password = Hash::make($request->password);
//     }

//     $staf->save();

//     return redirect()->route('admin.index')->with('success', 'Admin Berhasil Diubah');
// }
}
