<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasuse extends Model
{
    use HasFactory;

    protected $fillable = ['id_rw', 'positif', 'sembuh', 'meninggal', 'tanggal'];
    protected $table = "kasuses";
    public $timestamps = true;

    public function r_w_(){
        return $this->belongsTo('App\Models\R_w_', 'id_rw');
}
}