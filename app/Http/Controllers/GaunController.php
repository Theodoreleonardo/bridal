<?php

namespace App\Http\Controllers;

use App\Models\Gaun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gaun = DB::table('gauns')->get();
        
        return view('admin.gaun.index', ['gaun' => $gaun]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.gaun.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'gambar' => 'required',
        ]);

        Gaun::create($request->all());

        $gaun = DB::table('gauns')->get();
        foreach ($gaun as $row){
            $data = $row->id;
        }
        return view('admin.gaun.ukuran', ['id' => $data])->with('Status', 'Berhasil Ditambah Dan masukan Ukuran');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gaun  $gaun
     * @return \Illuminate\Http\Response
     */
    public function show(Gaun $gaun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gaun  $gaun
     * @return \Illuminate\Http\Response
     */
    public function edit(Gaun $gaun)
    {
        return view('admin.gaun.edit', ['gaun' => $gaun]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gaun  $gaun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gaun $gaun)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'gambar' => 'required',
        ]);
        //
        Gaun::where('id', $gaun->id)
        ->update([
            'nama'=>$request->nama,
            'jenis'=>$request->jenis,
            'gambar'=>$request->gambar,
        ]);
       // dd($request->all());
        $data = DB::table('ukurangauns')->where('id_gauns', '=', $request->id)->get();
        //dd($data[0]->id);
        return view('admin.gaun.editukuran',['data' => $data])->with('Status', 'Selesai update Mantap jiwa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gaun  $gaun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gaun $gaun)
    {
        //
        Gaun::destroy($gaun->id);
        return redirect('/gaun')->with('Status', 'Selesai Delete Mantap jiwa');
    }
}
