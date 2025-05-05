<?php

namespace App\Http\Controllers;

use App\Models\about_staff;
use App\Models\Konsultasi;
use App\Models\PesanKonsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class konsultasiController extends Controller
{
    public function daftarStaff()
    {

        $staffs = about_staff::all();
        return view('konsultasi.daftar_staff', compact('staffs'));
    }

    public function mulai($staff_id)
    {
        $user_id = Auth::id();

        $konsultasi = konsultasi::where('akun_user_id', $user_id)
            ->where('about_staffs_id', $staff_id)
            ->where('status', 'aktif')
            ->first();

        if (!$konsultasi) {
            $konsultasi = konsultasi::create([
               'akun_user_id' => $user_id,
               'about_staffs_id' => $staff_id,
               'status' => 'aktif'
            ]);
        }

        return redirect()->route('konsultasi.chat', $konsultasi->id);
    }

    public function chat(konsultasi $konsultasi)
    {
        if ($konsultasi->akun_user_id !== Auth::id()) {
            abort(403);
        }

        $pesans = $konsultasi->pesan()->latest()->get();
        return view('konsultasi.chat', compact('konsultasi', 'pesans'));
    }

    public function kirimPesan(Request $request, Konsultasi $konsultasi)
    {
        $request->validate([
            'pesan' => 'required'
        ]);

        PesanKonsultasi::create([
            'konsultasi_id' => $konsultasi->id,
            'pengirim_type' => 'user',
            'pengirim_id' => Auth::id(),
            'pesan' => $request->pesan
        ]);

        return back();
    }
}
