<?php

namespace App\Http\Controllers;
use App\Models\form_workshops;
use App\Models\home_workshop;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class formworkshopController extends Controller
{

    public function index(){
        $workshop = form_workshops::all();
        return view('form_workshop.index', compact('workshop'));
    }

    public function register($id){

    $workshop = home_workshop::findOrFail($id);
    return view('form_workshop.create', compact('workshop'));
    }


    public function store(Request $request, $id)
    {
        $ambilUser = Session::get('ambilUser');
        $userId = $ambilUser->id;

        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_hp' => 'required|string|max:15',
            'tujuan' => 'required|string|max:255',
        ]);

        form_workshops::create([
            "id_akun_user" => $userId,
            "id_home_workshops" => $id,
            "nama" => $request->nama,
            "alamat" => $request->alamat,
            "no_hp" => $request->no_hp,
            "tujuan" => $request->tujuan,
        ]);


        return redirect()->route('home')->with('success', 'Berhasil mendaftar workshop.');
    }


}

