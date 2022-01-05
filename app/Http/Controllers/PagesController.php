<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function battery()
    {
        return view('battery');
    }
    
    public function peve()
    {
        return view('peve');
    }

    public function tba()
    {
        return view('tba');
    }
}
