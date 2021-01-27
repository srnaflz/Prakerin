<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class R_w_ extends Model
{
    use HasFactory;
    protected $fillable = ['id_kelurahan', 'nama_rw'];
    protected $table = "r_w_s";
    public $timestamps = true;

    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan', 'id_kelurahan');
    }


    public function kasuse(){
        return $this->hasMany('App\Models\Kasuse', 'id_rw');
    }
}
