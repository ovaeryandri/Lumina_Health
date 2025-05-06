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

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->intended('formworkshop');
    //     }

    //     return back()->withErrors([
    //         'email' => 'Email atau Password Salah',
    //     ]);
    // }



    /**
     * Display a listing of the resource.
     */
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
        return redirect()->route('home');
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

        return redirect()->route('login.layout')->with('success', 'Pendaftaran Berhasil');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
