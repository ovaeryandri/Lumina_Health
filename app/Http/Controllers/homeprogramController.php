<?php

namespace App\Http\Controllers;

use App\Models\HomeProgram;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class homeprogramController extends Controller
{
    public function index()
    {
        $program = HomeProgram::all();
        return view('home_program.index', compact('program'));
    }

    public function create()
    {
        $program = HomeProgram::all();
        return view('home_program.create', compact('program'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:5|string',
            'deskripsi' => 'required|min:5|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
        ]);
        $filePath = $request->file('gambar')->store('program_files', 'public');

        HomeProgram::create([
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
        $program = HomeProgram::find($id);
        $program->tgl_mulai = \Carbon\Carbon::parse($program->tgl_mulai)->format('Y-m-d');
        $program->tgl_selesai = \Carbon\Carbon::parse($program->tgl_selesai)->format('Y-m-d');
        return view('home_program.edit', compact('program'));
    }

    public function update(Request $request, $id)
    {
        $program = HomeProgram::findOrFail($id);

        $request->validate([
            'judul' => 'required|min:5|string',
            'deskripsi' => 'required|min:5|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tgl_mulai' => 'required|date',
            'tgl_selesai' => 'required|date|after_or_equal:tgl_mulai',
        ], [
            'tgl_selesai.after_or_equal' => 'Tanggal selesai harus setelah dengan tanggal mulai.',
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

    public function join(HomeProgram $program)
    {

        if (!Auth::guard('akun_user')->check()) {
            return redirect()->route('login')->with('alert', 'Silakan login terlebih dahulu');
        }

        /** @var \App\Models\AkunUser $user */
        $user = Auth::guard('akun_user')->user();

        if ($user->programs()->where('home_program_id', $program->id)->exists()) {
            return back()->with('alert', 'Anda sudah mengikuti program ini');
        }

        $user->programs()->attach($program->id);

        return back()->with('success', 'Selamat! Anda telah bergabung di program ini');
    }



    public function destroy($id)
    {
        $program = HomeProgram::findOrFail($id);


        if ($program->gambar) {
            Storage::disk('public')->delete($program->gambar);
        }

        $program->delete();

        return redirect()->route('homeprogram.index')->with('success', 'Program berhasil dihapus.');
    }
}
