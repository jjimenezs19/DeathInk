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
        $dirname = "img/tattoos/";
        $images = glob($dirname."*.jpg");

        return view('gallery')->with('images', $images);

    }
    public function tattooCare()
    {
        return view('tattoo-care-blog');
    }
}
