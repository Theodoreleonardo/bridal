<?php

namespace App\Http\Controllers;

use App\Models\Makeup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MakeupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $makeup = DB::table('makeups')->get();

        return view('admin.makeup.index', ['makeup' => $makeup]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.makeup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis' => 'required',
            'style' => 'required',
        ]);

        Makeup::create([
            'jenis' => $request->jenis,
            'style' => $request->style,
        ]);

        return redirect('/makeup')->with('Status', 'Berhasil Ditambah');
        //asd
    }


    public function show(Makeup $makeup)
    {
        //
        $term = $makeup->id;
        // $term = '3';

        if ($term == '1') {
            dd('asuk 1');
            $data = DB::table('makeups')->where('jenis', 'Wedding')->get();
            return view('admin.makeup.show', ['makeup' => $data]);
        } else if ($term == '2') {
            dd('asuk 2');
            $data = DB::table('makeups')->where('jenis', 'party')->get();
            return view('admin.makeup.show', ['makeup' => $data]);
        } else if ($term == '3') {
            dd('asuk 3');
            $data = DB::table('makeups')->where('jenis', 'Commercial Photoshoot
            ')->get();
            return view('admin.makeup.show', ['makeup' => $data]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Makeup  $makeup
     * @return \Illuminate\Http\Response
     */
    public function edit(Makeup $makeup)
    {
        //
        return view('admin.makeup.edit', ['makeup' => $makeup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Makeup  $makeup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Makeup $makeup)
    {
        //
        $validatedData = $request->validate([
            'jenis' => 'required',
            'style' => 'required',
        ]);
        //
        Makeup::where('id', $makeup->id)
            ->update([
                'jenis' => $request->jenis,
                'style' => $request->style,
            ]);
        // dd($request->all());
        //dd($data[0]->id);
        $url = url()->previous();
        return redirect($url)->with('Status', 'Selesai update Mantap jiwa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Makeup  $makeup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Makeup $makeup)
    {


        $url = url()->previous();
        Makeup::destroy($makeup->id);
        return redirect($url)->with('Status', 'Makeup Berhasil Dihapus');
    }
}
