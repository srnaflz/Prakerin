<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BackController extends Controller
{
    //
    public function index(){
        $positif = DB::table('r_w_s')
               ->select('kasuses.positif',
               'kasuses.sembuh', 'kasuses.meninggal')
               ->join('kasuses', 'r_w_s.id', '=', 'kasuses.id_rw')
               ->sum('kasuses.positif');
       
       $sembuh = DB::table('r_w_s')
               ->select('kasuses.positif',
               'kasuses.sembuh', 'kasuses.meninggal')
               ->join('kasuses', 'r_w_s.id', '=', 'kasuses.id_rw')
               ->sum('kasuses.sembuh');
       
       $meninggal = DB::table('r_w_s')
               ->select('kasuses.positif',
               'kasuses.sembuh', 'kasuses.meninggal')
               ->join('kasuses', 'r_w_s.id', '=', 'kasuses.id_rw')
               ->sum('kasuses.meninggal');
               return view('layouts.master', compact('positif', 'sembuh', 'meninggal'));

    }

       
}
