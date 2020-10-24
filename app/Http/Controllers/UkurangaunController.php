<?php

namespace App\Http\Controllers;

use App\Models\Ukurangaun;
use Illuminate\Http\Request;

class UkurangaunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'ukuran' => 'required',
            'deskripsi' => 'required',
        ]);
        //
        //dd($request->all());
        Ukurangaun::create($request->all());
         return redirect('/gaun')->with('Status', 'Ukuran Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ukurangaun  $ukurangaun
     * @return \Illuminate\Http\Response
     */
    public function show(Ukurangaun $ukurangaun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ukurangaun  $ukurangaun
     * @return \Illuminate\Http\Response
     */
    public function edit(Ukurangaun $ukurangaun)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ukurangaun  $ukurangaun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ukurangaun $ukurangaun)
    {

       
        $validatedData = $request->validate([
            'ukuran' => 'required',
            'deskripsi' => 'required',
        ]);
         //return ("asd");
        //dd($request->all());
        Ukurangaun::where('id', $ukurangaun->id)
        ->update([
            'id_gauns'=>$request->id_gauns,
            'ukuran'=>$request->ukuran,
            'deskripsi'=>$request->deskripsi,
        ]);
        return redirect('/gaun')->with('Status', 'Selesai update Mantap jiwa');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ukurangaun  $ukurangaun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ukurangaun $ukurangaun)
    {
        //
    }
}
