<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    protected $table = "rws";

    public function kelurahan(){
        return $this->belongsTo('App/Kelurahan','id_kelurahan');
    }

    public function kasus(){
        return $this->hasMany('App/Kasus','id_rw');
    }

    use HasFactory;
}
