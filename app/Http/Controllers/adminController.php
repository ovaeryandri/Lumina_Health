<?php

namespace App\Http\Controllers;
use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{
    public function index(){
        $admin = admin::all();
        return view('admin.index', compact('admin'));
    }

    public function create(){
        $admin = admin::all();
        return view('admin.create', compact('admin'));
    }

    public function store(Request $request){
        $request->validate([
            'nama' => 'required|min:5|string',
            'password' => 'required|min:5|string',
        ]);
        admin::create([
            "nama" => $request->nama,
            "password" => Hash::make($request->password),
        ]);
        return redirect()->route('admin.index')->with('success', 'Admin Berhasil Ditambah');

    }
}
