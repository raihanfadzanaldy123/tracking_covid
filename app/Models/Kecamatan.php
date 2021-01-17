<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = "kecamatans";

    public function kota(){
        return $this->belongsTo('App/Kota','id_kota');
    }

    public function kelurahan(){
        return $this->hasMany('App/Kelurahan','id_kecamatan');
    }

    use HasFactory;
}
