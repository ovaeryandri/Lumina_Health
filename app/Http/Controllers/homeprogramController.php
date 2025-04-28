<?php

namespace App\Http\Controllers;

use App\Models\home_program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class homeprogramController extends Controller
{
    public function index()
    {
        $program = home_program::all();
        return view('home_program.index', compact('program'));
    }

    public function show()
    {
        $program = home_program::all();
        return view('home', compact('program'));
    }

    public function create()
    {
        return view('home_program.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:5|string',
            'deskripsi' => 'required|min:5|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
        ]);
        $filePath = $request->file('gambar')->store('program_files', 'public');

        home_program::create([
            "judul" => $request->judul,
            "deskripsi" => $request->deskripsi,
            "gambar" => $filePath,
            "tgl_mulai" => $request->tgl_mulai,
            "tgl_selesai" => $request->tgl_selesai,

        ]);
        return redirect()->route('homeprogram.index')->with('success', 'Program Berhasil Ditambah');
    }

    public function edit($id)
    {
        $program = home_program::find($id);
        return view('home_program.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $program = home_program::findOrFail($id);

        $request->validate([
            'judul' => 'required|min:5|string',
            'deskripsi' => 'required|min:5|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date',
        ]);

        $data = [
            "judul" => $request->judul,
            "deskripsi" => $request->deskripsi,
            "tgl_mulai" => $request->tgl_mulai,
            "tgl_selesai" => $request->tgl_selesai,
        ];

        if ($request->hasFile('gambar')) {
            if ($program->gambar) {
                Storage::disk('public')->delete($program->gambar);
            }
            $filePath = $request->file('gambar')->store('program_files', 'public');
            $data['gambar'] = $filePath;
        }

        $program->update($data);

        return redirect()->route('homeprogram.index')->with('success', 'Program Berhasil Diubah');
    }



    public function destroy($id)
    {
        $program = home_program::findOrFail($id);


        if ($program->gambar) {
            Storage::disk('public')->delete($program->gambar);
        }

        $program->delete();

        return redirect()->route('homeprogram.index')->with('success', 'Program berhasil dihapus.');
    }
}
