<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = ['kode_provinsi','nama_provinsi'];
    protected $table = "provinsis";
    public $timestamps = true;

    public function kota(){
        return $this->hasMany('App\Models\Kota', 'id_provinsi');
    }

    use HasFactory;
}
