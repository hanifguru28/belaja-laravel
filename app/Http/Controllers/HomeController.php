<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //method about
    public function about($nama)
    {
        return view('pages.about', compact('nama'));
    }
}
