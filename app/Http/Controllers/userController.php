<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function showLoginForm(){
        return view('login.layout');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('formworkshop');
        }

        return back()->withErrors([
            'email' => 'Email atau Password Salah',
        ]);
    }

   public function register()
    {
        return view('register.layout');
    }
}
