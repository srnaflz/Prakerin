<?php

namespace App\Http\Controllers;
use App\Models\R_w_;
use App\Models\Kasuse;

use App\Http\Controllers\DB;
use Illuminate\Http\Request;

class KasuseController extends Controller
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
        //
        
        $kasuse = Kasuse::with('r_w_.kelurahan.kecamatan.kota.provinsi')->get();
        return view('kasuse.index',compact('kasuse'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $r_w_ = R_w_::all();
        return view('kasuse.create',compact('r_w_'));
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
        $request->validate([
            'positif'      => 'required',
            'sembuh'      => 'required',
            'meninggal'      => 'required',
            'tanggal'      => 'required',


        ],  [
            'positif.required'          => 'Wajib diisi.',
            'sembuh.required'          => 'Wajib diisi.',
            'meninggal.required'          => 'Wajib diisi.',
            'tanggal.required'          => 'Wajib diisi.',

        ]);
        $kasuse= new Kasuse();
        $kasuse->id_rw = $request->id_rw;
        $kasuse->positif = $request->positif;
        $kasuse->sembuh = $request->sembuh;
        $kasuse->meninggal = $request->meninggal;
        $kasuse->tanggal = $request->tanggal;
        $kasuse->save();
        return redirect()->route('kasuse.index')
            ->with(['message'=>'Data Berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kasuse  $kasuse
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
        $kasuse = Kasuse::findOrFail($id);
        return view('kasuse.show',compact('kasuse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kasuse  $kasuse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
       // $r_w_ = R_w_::all();
        $kasuse = Kasuse::findOrFail($id);
        return view('kasuse.edit',compact('kasuse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kasuse  $kasuse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $kasuse = Kasuse::findOrFail($id);
        //$kasuse->id_rw = $request->id_rw;
        $kasuse->positif = $request->positif;
        $kasuse->meninggal = $request->meninggal;
        $kasuse->sembuh = $request->sembuh;
        $kasuse->tanggal = $request->tanggal;
        $kasuse->save();
        return redirect()->route('kasuse.index')
            ->with(['message'=>'Data Berhasil diubah']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kasuse  $kasuse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $kasuse = Kasuse::findOrFail($id)->delete();
        return redirect()->route('kasuse.index')
                        ->with(['message1'=>'Berhasil dihapus']);
    }
}
