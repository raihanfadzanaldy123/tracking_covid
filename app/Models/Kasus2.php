<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    protected $table = "kasus2s";

    public function negara(){
        return $this->belongsTo('App/Negara','id_negara');
    }

    use HasFactory;
}
