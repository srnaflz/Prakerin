<?php

namespace App\Http\Controllers;

use App\Models\R_w_;
use App\Models\Kelurahan;
use App\Http\Controllers\DB;

use Illuminate\Http\Request;

class RWController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */   public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //     
           $r_w_ = R_w_::with('kelurahan')->get();
        return view('rw.index',compact('r_w_'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kelurahan = Kelurahan::all();
        return view('rw.create',compact('kelurahan'));
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
            
            'nama_rw'      => 'required',
        ],  [
            
            'nama_rw.required'          => 'Nama wajib diisi.',
        ]);
        
    $r_w_ = new R_w_();
    $r_w_->id_kelurahan = $request->id_kelurahan;
    $r_w_->nama_rw = $request->nama_rw;
    $r_w_->save();
    return redirect()->route('rw.index')
    ->with(['message'=>'Data berhasil dibuat']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\R_w_  $r_w_
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $r_w_ = R_w_::findOrFail($id);
        return view('rw.show',compact('r_w_'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\R_w_  $r_w_
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        //
        $kelurahan = Kelurahan::all();
        $r_w_ = R_w_::findOrFail($id);
       
        // dd($select);
        return view('rw.edit',compact('r_w_','kelurahan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\R_w_  $r_w_
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $r_w_ = R_w_::findOrFail($id);
        $r_w_->id_kelurahan = $request->id_kelurahan;
        $r_w_->nama_rw = $request->nama_rw;
        $r_w_->save();
         return redirect()->route('rw.index')
                     ->with(['message'=>'Data berhasil di edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\R_w_  $r_w_
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        //
        $r_w_ = R_w_::findOrFail($id)->delete();
        return redirect()->route('rw.index')
                ->with(['message'=>'kereta berhasil dihapus']);
    }
}
