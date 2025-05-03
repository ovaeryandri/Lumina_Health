<?php

namespace App\Http\Controllers;
use App\Models\about_staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class aboutstaffController extends Controller
{
    public function index(){
        $staf = about_staff::all();
        return view('about_staf.index', compact('staf'));
    }

    public function create(){
        $staf = about_staff::all();
        return view('about_staf.create', compact('staf'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|min:5|string',
            'spesialisasi' => 'required|min:5|string',
            'bio' => 'required|min:5|string',
            'tahun_pengalaman' => 'required|string',
            'email' => 'required|min:5|email',
            'no_hp' => 'required|min:5|string',
            'foto_profil' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $filePath = $request->file('foto_profil')->store('program_files','public');

        about_staff::create([
            "nama" => $request->nama,
            "spesialisasi" => $request->spesialisasi,
            "bio" => $request->bio,
            "tahun_pengalaman" => $request->tahun_pengalaman,
            "email" => $request->email,
            "no_hp" => $request->no_hp,
            "foto_profil" => $filePath,
        ]);
        return redirect()->route('aboutstaff.index')->with('success', 'Staf Berhasil Ditambah');
}

public function edit($id){
    $staf = about_staff::find($id);
    return view('about_staf.edit', compact('staf'));

}

public function update(Request $request, $id)
{
    $staf = about_staff::findOrFail($id);

    $request->validate([
        'nama' => 'required|min:5|string',
        'spesialisasi' => 'required|min:5|string',
        'bio' => 'required|min:5|string',
        'tahun_pengalaman' => 'required|string',
        'email' => 'required|min:5|email',
        'no_hp' => 'required|min:5|string',
        'foto_profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = [
            "nama" => $request->nama,
            "spesialisasi" => $request->spesialisasi,
            "bio" => $request->bio,
            "tahun_pengalaman" => $request->tahun_pengalaman,
            "email" => $request->email,
            "no_hp" => $request->no_hp,
    ];

    if ($request->hasFile('foto_profil')) {
        if ($staf->foto_profil) {
            Storage::disk('public')->delete($staf->foto_profil);
        }
        $filePath = $request->file('foto_profil')->store('program_files', 'public');
        $data['foto_profil'] = $filePath;
    }

    $staf->update($data);

    return redirect()->route('aboutstaff.index')->with('success', 'Program Berhasil Diubah');
}

public function destroy($id)
{
    $staf = about_staff::findOrFail($id);


    if ($staf->foto_profil) {
        Storage::disk('public')->delete($staf->foto_profil);
    }

    $staf->delete();

    return redirect()->route('aboutstaff.index')->with('success', 'Program berhasil dihapus.');
}

}
