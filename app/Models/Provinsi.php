<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    public function kota(){
        return $this->hasMany('App\Models\Kota', 'id_provinsi');
    }

    use HasFactory;
}
