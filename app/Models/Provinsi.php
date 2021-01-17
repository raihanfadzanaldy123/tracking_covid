<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = "provinsis";

    public function kota(){
        return $this->hasMany('App/Kota','id_provinsi');
    }

    use HasFactory;
}
