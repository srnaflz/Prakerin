<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasuse2 extends Model
{
    use HasFactory;

    protected $table = "kasuse2s";

    public function negara(){
        return $this->belongsTo(Negara::class);
    }
}
