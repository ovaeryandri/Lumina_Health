<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home_program;

class PageController extends Controller
{
    function contact()
    {
        return view('page.contact');
    }

    function workshop()
    {
        return view('page.workshop');
    }

    function program()
    {
        $program = home_program::all();
        return view('page.program', compact('program'));
    }

    function aboutUs()
    {
        return view('page.aboutUs');
    }

    function galeri()
    {
        return view('page.galeri');
    }

    function blog()
    {
        return view('page.blog');
    }

    function ebook()
    {
        return view('page.ebook');
    }

    function grafik()
    {
        return view('page.grafik');
    }
}
