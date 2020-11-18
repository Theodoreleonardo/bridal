<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function gown()
    {
        return view('gown');
    }

    public function makeup()
    {
        return view('makeup');
    }
    public function testi()
    {
        return view('testi');
    }
}
