<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Gaun;
use App\Models\Ukurangaun;
use App\Models\baners;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        return view('makeup');
    }
    public function testi()
    {
        return view('testi');
    }
}
