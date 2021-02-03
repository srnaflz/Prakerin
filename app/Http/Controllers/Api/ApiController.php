<?php

namespace App\Http\Controllers\Api;
use App\Models\Kasuse;
use App\Models\Provinsi;
use App\Models\Kelurahan;
use App\Models\kecamatan;
use App\Models\R_W;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;

class ApiController extends Controller
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


    $res = [
        'success' => true,
        'data' => 'Data Kasus Indonesia',
        'positif' => $positif,
        'sembuh' => $sembuh,
        'meninggal' => $meninggal,
        'message' => 'Data Kasus Ditampilkan'
    ];
    return response()->json($res,200);
}
  public function provinsi($id){
    $positif = DB::table('provinsis')
    ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
    ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
    ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
    ->join('r_w_s', 'r_w_s.id_kelurahan', '=', 'kelurahans.id')
    ->join('kasuses', 'kasuses.id_rw', '=', 'r_w_s.id')
    ->select('kasuses.positif')
    ->where('provinsis.id',$id)
    ->sum('kasuses.positif');

     $sembuh = DB::table('provinsis')
     ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
     ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
     ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
     ->join('r_w_s', 'r_w_s.id_kelurahan', '=', 'kelurahans.id')
     ->join('kasuses', 'kasuses.id_rw', '=', 'r_w_s.id')
     ->select('kasuses.sembuh')
     ->where('provinsis.id',$id)
     ->sum('kasuses.sembuh');

     $meninggal = DB::table('provinsis')
     ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
     ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
     ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
     ->join('r_w_s', 'r_w_s.id_kelurahan', '=', 'kelurahans.id')
     ->join('kasuses', 'kasuses.id_rw', '=', 'r_w_s.id')
     ->select('kasuses.meninggal')
     ->where('provinsis.id',$id)
     ->sum('kasuses.meninggal');

     $provinsi = Provinsi::whereId($id)->first();

    $res = [
        'success' => true,
        'nama_provinsi' => $provinsi['nama_provinsi'],
        'positif' => $positif,
        'sembuh' => $sembuh,
        'meninggal' => $meninggal,
        'message' => 'Data Berhasil DItampilkan'
    ];
    return response()->json($res, 200);
}

public function provinsikasus(){
    $var = DB::table('provinsis')
    ->join('kotas', 'kotas.id_provinsi', '=', 'provinsis.id')
    ->join('kecamatans', 'kecamatans.id_kota', '=', 'kotas.id')
    ->join('kelurahans', 'kelurahans.id_kecamatan', '=', 'kecamatans.id')
    ->join('r_w_s', 'r_w_s.id_kelurahan', '=', 'kelurahans.id')
    ->join('kasuses', 'kasuses.id_rw', 'r_w_s.id')
    ->select('nama_provinsi',
        DB::raw('sum(kasuses.positif) as Positif'),
        DB::raw('sum(kasuses.sembuh) as sembuh'),
        DB::raw('sum(kasuses.meninggal) as meninggal'),
    )
    ->groupBy('nama_provinsi')
    ->get();

$data = [
    'status' => true,
    'message' => 'Menampilkan Provinsi',
    'data' => $var,
];

return response()->json($data, 200);
}
}
