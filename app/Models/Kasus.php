<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    protected $table = "kasuses";

    public function rw(){
        return $this->belongsTo('App/Rw','id_rw');
    }

    use HasFactory;
}
