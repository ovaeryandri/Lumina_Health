<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    function login()
    {
        return view('login.layout');
    }

    function register()
    {
        return view('register.layout');
    }
}
