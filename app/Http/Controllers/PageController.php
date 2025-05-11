<?php

namespace App\Http\Controllers;

use App\Models\download_ebook;
use App\Models\AkunUser;
use Illuminate\Support\Facades\DB;
use App\Models\HomeProgram;
use App\Models\home_workshop;
use App\Models\about_staff;
use App\Models\blogCategory;
use App\Models\blogNews;
use App\Models\blogPost;
use App\Models\galery_testimonivideo;

class PageController extends Controller
{
    function contact()
    {
        return view('page.contact');
    }

    function workshop()
    {
        $workshop = home_workshop::paginate(6);
        return view('page.workshop', compact('workshop'));
    }

    function program()
    {
        $program = HomeProgram::paginate(6);
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
        $categories = blogCategory::all();
        $blogNews = blogNews::latest()->take(3)->get();
        $blogPost = blogPost::latest()->take(3)->get();

        $newsPaginate = blogNews::with('category')->latest()->paginate(2);
        $postPaginate = blogPost::with('category')->latest()->paginate(2);

        return view('page.blog', compact('categories', 'blogNews', 'blogPost', 'newsPaginate', 'postPaginate'));
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
        $data = AkunUser::select('umur', DB::raw('count(*) as total'))
            ->groupBy('umur')
            ->orderBy('umur')
            ->get();
        return view('page.grafik', compact('data'));
    }
}
