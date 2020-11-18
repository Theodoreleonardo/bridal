<?php

namespace App\Http\Controllers;

use App\Models\Makeup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class MakeupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.makeup.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //
        if ($id == '1') {
            $data = ['Prewedding','Holy Matrimony','Reception',];
            //dd($asd);
            return view('admin.makeup.create', ['makeup' => $data],['jenis' => 'Wedding']);
        } else if ($id == '2') {
            $data = ['Birthday','Prom','Graduation','Maternity','Family','Mom','Bridesmaid',];
            return view('admin.makeup.create', ['makeup' => $data],['jenis' => 'Party']);
        } else if ($id == '3') {
            $data = ['Kids','Man','Woman',];
            return view('admin.makeup.create', ['makeup' => $data],['jenis' => 'Commercial Photoshoot']);
        }
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
            'gambar' => 'required',
        ]);

        $imgname = $request->gambar->getClientOriginalName() . '-' . time()
        . '.' . $request->gambar->extension();
        $request->gambar->move(storage_path('app/public/images/imgmakeup'), $imgname);

        if ($request->jenis == 'Wedding'){
            $id = '1';
        }
        else if ($request->jenis == 'Party'){
            $id = '2';
        }
        else if ($request->jenis == 'Commercial Photoshoot'){
            $id = '3';
        }

        Makeup::create([
            'jenis' => $request->jenis,
            'style' => $request->style,
            'gambar' => $imgname,
        ]);

        return redirect('/makeup')->with('Status', 'Berhasil Ditambah');
        //asd
    }


    public function show(Makeup $makeup)
    {

    }

    public function route($id){
       // dd($id);
        if ($id == '1') {
            $data = DB::table('makeups')->where('jenis', 'Wedding')->get();
            return view('admin.makeup.show', ['makeup' => $data]);
        } else if ($id == '2') {
            $data = DB::table('makeups')->where('jenis', 'party')->get();
            return view('admin.makeup.show1', ['makeup' => $data]);
        } else if ($id == '3') {
            $data = DB::table('makeups')->where('jenis', 'Commercial Photoshoot')->get();
            return view('admin.makeup.show2', ['makeup' => $data]);
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
        if ($makeup->jenis == 'Wedding') {
            $data = ['Prewedding','Holy Matrimony','Reception',];
            //dd($asd);
            return view('admin.makeup.edit', ['makeup' => $makeup],['data' => $data]);

        } else if ($makeup->jenis == 'Party') {
            $data = ['Birthday','Prom','Graduation','Maternity','Family','Mom','Bridesmaid',];
            return view('admin.makeup.edit', ['makeup' => $makeup],['data' => $data]);

        } else if ($makeup->jenis == 'Commercial Photoshoot') {
            $data = ['Kids','Man','Woman',];
            return view('admin.makeup.edit', ['makeup' => $makeup],['data' => $data]);
        }
 //    return view('admin.makeup.edit', ['makeup' => $makeup]);
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
            'gambar' => 'required',
        ]);

        Storage::disk('local')->delete('public/images/imgmakeup/' . $makeup->gambar);
       
        $imgname = $request->gambar->getClientOriginalName() . '-' . time()
        . '.' . $request->gambar->extension();
        $request->gambar->move(storage_path('app/public/images/imgmakeup'), $imgname);
        //
        Makeup::where('id', $makeup->id)
            ->update([
                'jenis' => $request->jenis,
                'style' => $request->style,
                'gambar' => $imgname,
            ]);

        return redirect('/makeup')->with('Status', 'Selesai update Mantap jiwa');
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
        Storage::disk('local')->delete('public/images/imgmakeup/' . $makeup->gambar);

        return redirect($url)->with('Status', 'Makeup Berhasil Dihapus');
    }
}
