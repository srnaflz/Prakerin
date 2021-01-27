<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB ;


class Kelurahan extends Model
{
    use HasFactory;
    protected $fillable = ['id_kecamatan', 'nama_kelurahan'];
    protected $table = "kelurahans";
    public $timestemps = true;


    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan');
    }

    public function r_w_(){
        return $this->hasMany('App\Models\R_w_', 'id_kelurahan');
    }
}
