<?php

namespace App\Http\Controllers;

use App\Models\Baner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('baners')->get();
        return view('admin.baner.index', ['baner' => $data]);
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
        return view('admin.baner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
                //dd($request);
                $validatedData = $request->validate([
                    'gambar' => 'required',
                    'kategori' => 'required',
                    
                ]);
        
                $imgname = $request->gambar->getClientOriginalName() . '-' . time()
                        . '.' . $request->gambar->extension();
                $request->gambar->move(storage_path('app/public/images/imgbaner'), $imgname);
        
                Baner::create([
                    'gambar' => $imgname,
                    'kategori' => $request->kategori,
        
                ]);
                
                return redirect('/baners')->with('Status', 'Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function show(Baner $baner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function edit(Baner $baner)
    {
        //
        return view('admin.baner.edit', ['baner' => $baner]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baner $baner)
    {
        //
        $validatedData = $request->validate([
            'kategori' => 'required',
            'gambar' => 'required',
        ]);
        Storage::disk('local')->delete('public/images/imgbaner/' . $baner->gambar);
       
        $imgname = $request->gambar->getClientOriginalName() . '-' . time()
        . '.' . $request->gambar->extension();
        $request->gambar->move(storage_path('app/public/images/imgbaner'), $imgname);

        Baner::where('id', $baner->id)
        ->update([
            'kategori'=>$request->kategori,
            'gambar'=> $imgname,
        ]);
        return redirect('/baners')->with('Status', 'Selesai update Mantap jiwa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baner $baner)
    {
        //
                //$data = $gaun->id;
        Baner::destroy($baner->id);
        //Storage::delete($gaun->id);
        Storage::disk('local')->delete('public/images/imgbaner/' . $baner->gambar);
        return redirect('/baners')->with('Status', 'Berhasil Delete');
    }
}
