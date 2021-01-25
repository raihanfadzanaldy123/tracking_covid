<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    protected $fillable = ['kode_negara','nama_negara'];
    protected $table = "negaras";

    public function kasus2(){
        return $this->hasMany('App\Models\Kasusglobal', 'id_negara');
    }

    use HasFactory;
}

//
// 