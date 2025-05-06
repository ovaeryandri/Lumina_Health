<?php

namespace App\Http\Controllers;

use App\Models\download_ebook;
use Illuminate\Http\Request;
use App\Models\home_program;
use App\Models\about_staff;
use App\Models\galery_dokumentasi;
use App\Models\galery_testimonivideo;

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
        $staf = about_staff::all();
        return view('page.aboutUs', compact('staf'));
    }

    function galeri()
    {
        $galeri = galery_testimonivideo::all();
        return view('page.galeri', compact('galeri'));
    }

    function blog()
    {
        return view('page.blog');
    }

    function konsultasi()
    {
        return view('page.konsultasi');
    }

    function ebook()
    {
        $ebook = download_ebook::all();
        return view('page.ebook', compact('ebook'));
    }

    function grafik()
    {
        return view('page.grafik');
    }
}
