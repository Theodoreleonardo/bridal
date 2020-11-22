<?php

namespace App\Http\Controllers;

use App\Models\Gaun;
use App\Models\Ukurangaun;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
    public function store(Request $request)
    {
       // dd($request->all());
        $validatedData = $request->validate([
            'nama' => 'required',
            'jenis' => 'required',
            'gambar' => 'required|image',
        ]);

        $imgname = $request->gambar->getClientOriginalName() . '-' . time()
                . '.' . $request->gambar->extension();
        $request->gambar->move(storage_path('app/public/images/imggaun'), $imgname);

        Gaun::create([
            'nama' => $request->nama,
            'jenis' => $request->jenis,
            'gambar' => $imgname,

        ]);
        
        return redirect('/gaun')->with('Status', 'Berhasil Ditambah Dan masukan Ukuran');
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
       $ukuran = DB::table('ukurangauns')->where('id_gauns',$gaun->id)->get();
        return view('admin.gaun.show', ['gaun' => $gaun],['ukurangaun' =>  $ukuran]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gaun  $gaun
     * @return \Illuminate\Http\Response
     */
    public function edit(Gaun $gaun)
    {

        $url = url()->previous();
        return view('admin.gaun.edit', ['gaun' => $gaun],['url' => $url]);
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
            'gambar' => 'required|image',
        ]);
        //
        Storage::disk('local')->delete('public/images/imggaun/' . $gaun->gambar);
       
        $imgname = $request->gambar->getClientOriginalName() . '-' . time()
        . '.' . $request->gambar->extension();
        $request->gambar->move(storage_path('app/public/images/imggaun'), $imgname);

        
        Gaun::where('id', $gaun->id)
        ->update([
            'nama'=>$request->nama,
            'jenis'=>$request->jenis,
            'gambar'=> $imgname,
        ]);
       // dd($request->all());
        //dd($data[0]->id);
        $url = url()->current();;
        return redirect($url)->with('Status', 'Selesai update Mantap jiwa');
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
        //$data = $gaun->id;
        Gaun::destroy($gaun->id);
        //Storage::delete($gaun->id);
        Storage::disk('local')->delete('public/images/imggaun/' . $gaun->gambar);
        DB::table('ukurangauns')->where('id_gauns',$gaun->id)->delete();
        return redirect('/gaun')->with('Status', 'Selesai Delete Mantap jiwa');
    }
}
