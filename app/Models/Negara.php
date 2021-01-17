<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    protected $table = "negaras";

    public function kasus2(){
        return $this->hasMany('App/Kasus2','id_negara');
    }

    use HasFactory;
}
