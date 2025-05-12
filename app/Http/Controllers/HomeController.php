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

        // Ambil semua data umur
        $rawData = AkunUser::select('umur', DB::raw('count(*) as total'))
            ->groupBy('umur')
            ->get();

        // Hitung total user umur < 20
        $under20 = $rawData->where('umur', '<=', 20)->sum('total');

        // Ambil umur 20-30 (ditampilkan masing-masing)
        $between20_30 = $rawData->whereBetween('umur', [21, 29])->sortBy('umur')->values();

        // Hitung total user umur > 30
        $above30 = $rawData->where('umur', '>=', 30)->sum('total');

        // Siapkan data baru
        $finalData = collect();

        if ($under20 > 0) {
            $finalData->push((object)[
                'umur' => '&le; 20',
                'total' => $under20
            ]);
        }

        foreach ($between20_30 as $item) {
            $finalData->push((object)[
                'umur' => $item->umur,
                'total' => $item->total
            ]);
        }

        if ($above30 > 0) {
            $finalData->push((object)[
                'umur' => '&ge; 30',
                'total' => $above30
            ]);
        }

        return view('home', compact('program', 'workshop', 'finalData'));
    }
}
