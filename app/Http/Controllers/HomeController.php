<?php

namespace App\Http\Controllers;

use App\Models\AkunUser;
use App\Models\HomeProgram;
use Illuminate\Http\Request;
use App\Models\home_workshop;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $program = HomeProgram::paginate(6);
        $workshop = home_workshop::paginate(6);
        $data = AkunUser::select('umur', DB::raw('count(*) as total'))
            ->groupBy('umur')
            ->orderBy('umur')
            ->get();

        return view('home', compact('program', 'workshop', 'data'));
    }
    
}
