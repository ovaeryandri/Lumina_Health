<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('staff.login');
    }

    public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
    ]);

    // Cari staff berdasarkan email
    $staff = \App\Models\about_staff::where('email', $request->email)->first();

    if ($staff) {
        // Login manual tanpa verifikasi password
        Auth::guard('staff')->login($staff);
        return redirect()->route('staff.dashboard');
    }

    return back()->withErrors(['email' => 'Email tidak ditemukan']);
}

}
