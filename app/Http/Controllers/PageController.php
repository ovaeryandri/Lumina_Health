<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
