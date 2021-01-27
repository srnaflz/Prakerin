<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;
    protected $fillable = ['id_kota', 'kode_kecamatan', 'nama_kecamatan'];
    protected $table = "kecamatans";
    public $timestemps = true;


    public function kota(){
        return $this->belongsTo('App\Models\Kota', 'id_kota');
    }
    
    public function kelurahan(){
        return $this->hasMany('App\Models\Kelurahan', 'id_kecamatan');
    }
}
