<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\AkunUser;
use App\Rules\LoginCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class userController extends Controller
{

    public function showLoginForm()
    {
        return view('login.layout');
    }

    public function index()
    {
        $users = AkunUser::all();
        return view('user.index', compact('users'));
    }

    function proseslogin(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => ['required', new LoginCheck($request)],
    ]);

    $input = $request->only('email', 'password');

    if (Auth::guard('akun_user')->attempt($input)) {
        $request->session()->regenerate();
        return redirect()->route('home');
    }

    return back()->withErrors([
        'email' => 'Login gagal, periksa kembali email dan password.',
    ]);
}


    function logout()
    {
        Session::flush();
        return redirect()->route('home');
    }

    function register()

    {
        return view('register.layout');
    }

    function daftar(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5|string|max:255',
            'umur' => 'required|integer',
            'kelamin' => 'required|in:Pria,Wanita',
            'email' => 'required|email|unique:akun_user,email',
            'password' => 'required|min:6|confirmed|',
        ]);

        $dataInsert = [
            'nama' => $request->nama,
            'umur' => $request->umur,
            'kelamin' => $request->kelamin,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];


        AkunUser::create($dataInsert);

        return redirect()->route('login')->with('success', 'Pendaftaran Berhasil');
    }

}
