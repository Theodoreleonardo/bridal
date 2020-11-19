<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


use App\Models\Gaun;
use App\Models\Ukurangaun;
use App\Models\baners;
use App\Models\Makeup;


class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function gown()
    {
        $gaun = DB::table('gauns')->get();
        $ukuran = DB::table('ukurangauns')->get();
        $baner = DB::table('baners')->where('kategori','Gaun')->get();
        return view('gown',['gaun' => $gaun],['baner' => $baner]);
    }

    public function makeup()
    {
        $makeup = DB::table('makeups')->get();
        $baner = DB::table('baners')->where('kategori','Makeup')->get();
        return view('makeup',['makeup' => $makeup],['baner' => $baner]);
    }
    public function testi()
    {
        return view('testi');
    }
}
