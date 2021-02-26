<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Kasuse;
use App\Models\R_w_;
use App\Models\Provinsi;
class ReportController extends Controller
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

    
        $tampil = DB::table('provinsis')
                     ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
                     ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
                     ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
                     ->join('r_w_s', 'r_w_s.id_kelurahan', '=', 'kelurahans.id')
                     ->join('kasuses', 'kasuses.id_rw', 'r_w_s.id')
                     ->select( 'nama_provinsi',
                            DB::raw('sum(kasuses.positif) as positif'),
                            DB::raw('sum(kasuses.sembuh) as sembuh'),
                            DB::raw('sum(kasuses.meninggal) as meninggal'),
                        )
                    ->groupBy('nama_provinsi')
                    ->get();

                    return view('frontend', compact('positif', 'sembuh', 'meninggal', 'tampil'));

    }
    
}