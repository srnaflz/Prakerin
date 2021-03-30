<?php

namespace App\Http\Controllers;
use App\Models\Provinsi;
use App\Http\Controllers\DB;
use Illuminate\Http\Request;


class ProvinsiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //menampilkan index
        $provinsi = Provinsi::all();
        return view('provinsi.index',compact('provinsi'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan create
        return view('provinsi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
 
    public function store(Request $request)
    {
        //validasi
        $messages = [
            'required' => 'Gaboleh Kosong Ya!', 
        ];
        $this->validate($request,[
            'kode_provinsi' => 'required',
            'nama_provinsi' => 'required',
        ],$messages);
      //  $request->validate([
        //    'kode_provinsi'      => 'required',
          //  'nama_provinsi'      => 'required',
       // ]  [
         //   'kode_provinsi.required'          => 'Kode wajib diisi.',
           // 'kode_provinsi.max'               => 'Kode maksimal 4 nomer.',
           // 'kode_provinsi.unique'            => 'Kode sudah terdaftar.',
            //'nama_provinsi.required'          => 'Nama wajib diisi.',
            //'nama_provinsi.unique'            => 'Nama sudah terdaftar.',
       //]);
        //menambahkan data
        $provinsi = new Provinsi(); //menampung model
        $provinsi->kode_provinsi  /*nama field*/ = $request->kode_provinsi; //name
        $provinsi->nama_provinsi  /*nama field*/ = $request->nama_provinsi; 
        $provinsi->save(); //untuk menyimpan data suatu inputan
        return redirect()->route('provinsi.index');

      
    }
  
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //menampilkan data
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.show',compact('provinsi'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengedit data
        $provinsi = Provinsi::findOrFail($id);
        return view('provinsi.edit',compact('provinsi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //mengupdate data
        $provinsi = Provinsi::findOrFail($id);
        $provinsi->kode_provinsi = $request->kode_provinsi;
        $provinsi->nama_provinsi = $request->nama_provinsi;
        $provinsi->save();
        return redirect()->route('provinsi.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provinsi  $provinsi
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //menghapus data
        $provinsi = Provinsi::findOrFail($id)->delete();
        return redirect()->route('provinsi.index')
                ->with(['message'=>'kereta berhasil dihapus']);
    }
}
