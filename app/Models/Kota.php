<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $table = "kotas";

    public function provinsi(){
        return $this->belongsTo('App/Provinsi','id_provinsi');
    }

    public function kecamatan(){
        return $this->hasMany('App/Kecamatan','id_kota');
    }

    use HasFactory;
}
