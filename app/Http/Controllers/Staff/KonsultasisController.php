<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\konsultasi;
use App\Models\PesanKonsultasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KonsultasisController extends Controller
{
    public function dashboard()
    {
        $staffId = Auth::guard('staff')->id();

        $konsultasis = konsultasi::with('akun_user', 'about_staffs') // eager loading biar efisien
            ->where('about_staffs_id', $staffId)
            ->where('status', 'aktif')
            ->get();

        return view('staff.dashboard', compact('konsultasis'));
    }


    public function chat(Konsultasi $konsultasi)
    {
        if ($konsultasi->about_staffs_id !== Auth::guard('staff')->id()) {
            abort(403);
        }

        $pesans = $konsultasi->pesan()->latest()->get();
        return view('staff.chat', compact('konsultasi', 'pesans'));
    }

    public function kirimPesan(Request $request, Konsultasi $konsultasi)
    {
        $request->validate([
            'pesan' => 'required'
        ]);

        PesanKonsultasi::create([
            'konsultasi_id' => $konsultasi->id,
            'pengirim_type' => 'staff',
            'pengirim_id' => Auth::guard('staff')->id(),
            'pesan' => $request->pesan
        ]);

        return back();
    }
}
