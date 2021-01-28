<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rw extends Model
{
    protected $fillable = ['no_rw', 'id_kelurahan'];
    protected $table = "rws";

    public function kelurahan(){
        return $this->belongsTo('App\Models\Kelurahan', 'id_kelurahan');
    }

    public function kasus(){
        return $this->hasMany('App\Models\Kasus', 'id_rw');
    }

    use HasFactory;
}
