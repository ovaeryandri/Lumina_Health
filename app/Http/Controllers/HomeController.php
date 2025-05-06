<?php

namespace App\Http\Controllers;

use App\Models\AkunUser;
use App\Models\home_program;
use Illuminate\Http\Request;
use App\Models\home_workshop;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $program = home_program::paginate(4);
        $workshop = home_workshop::paginate(4);
        $data = AkunUser::select('umur', DB::raw('count(*) as total'))
            ->groupBy('umur')
            ->orderBy('umur')
            ->get();

        return view('home', compact('program', 'workshop', 'data'));
    }
}
