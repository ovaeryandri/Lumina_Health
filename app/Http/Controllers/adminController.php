<?php

namespace App\Http\Controllers;

use App\Models\admin;
use App\Rules\LoginCheckAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class adminController extends Controller
{

    public function tampiladmin()
    {
        return view('admin.index');
    }



    public function index()
    {
        $admin = admin::all();
        return view('admin.index', compact('admin'));
    }

    public function create()
    {
        $admin = admin::all();
        return view('admin.create', compact('admin'));
    }

    public function store(Request $request)
    {
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

    public function edit(admin $admin)
    {
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, admin $admin)
    {
        $request->validate([
            'nama' => 'required|min:5|string',
            'password' => 'nullable|min:5|string',
        ]);

        $admin->nama = $request->nama;

        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect()->route('admin.index')->with('success', 'Admin Berhasil Diubah');
    }

    public function destroy(admin $admin)
    {
        $admin->delete();
        return redirect()->route('admin.index')->with('success', 'Admin Berhasil Dihapus');
    }
}
