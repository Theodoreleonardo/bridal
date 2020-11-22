<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DB::table('testimonis')->get();
        return view('admin.testimoni.index', ['testimoni' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.testimoni.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $files = $request->file('gambar');
        $check = ['gambar' => $files]; 
        // foreach ($files as $row) {
        //     $asd = $row;

        //     dd($asd);
        // }

           // dd($check);
            //dd($request->all());
        // $validatedData = $request->validate([
        //     'gambar' => 'required|image',
        // ]);

        $this->validate($request,[
            'gambar' => 'required',
            'gambar.*' => 'image'
        ]);

            foreach($files as $row){
               
        $imgname = $row->getClientOriginalName() . '-' . time()
                . '.' . $row->extension();
        $row->move(storage_path('app/public/images/imgtestimoni'), $imgname);

        Testimoni::create([
            'gambar' => $imgname,

        ]);
            }
        

        
        return redirect('/testimoni')->with('Status', 'Berhasil Ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show(Testimoni $testimoni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimoni $testimoni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimoni $testimoni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimoni $testimoni)
    {
        //
        Testimoni::destroy($testimoni->id);
        //Storage::delete($gaun->id);
        Storage::disk('local')->delete('public/images/imgtestimoni/' . $testimoni->gambar);
        return redirect('/testimoni')->with('Status', 'Berhasil Delete');
    }
}
