<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\LoginCheckAdmin;
use Illuminate\Support\Facades\Session;

class DashboardAdmin extends Controller
{
    public function dashboard()
    {
        return view('admin.layout');
    }

    public function loginadmin()
    {
        return view('loginadmin');
    }

    public function prosesloginadmin(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5|string',
            'password' => ['required', new LoginCheckAdmin($request)],
        ]);

        return redirect()->route('admin.index');
    }

    public function logoutadmin()
    {
        Session::flush();
        return redirect()->route('loginadmin');
    }
}
