<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    protected $table = "kelurahans";

    public function kecamatan(){
        return $this->belongsTo('App/Kecamatan','id_kecamatan');
    }

    public function rw(){
        return $this->hasMany('App/Rw','id_kelurahan');
    }

    use HasFactory;
}
