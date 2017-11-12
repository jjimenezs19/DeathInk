<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function gallery()
    {
        return view('gallery');
    }
    public function tattooCare()
    {
        return view('tattoo-care-blog');
    }
}
