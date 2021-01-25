<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasusglobal extends Model
{
    protected $fillable = ['id_negara', 'positif', 'sembuh', 'meninggal', 'tanggal'];
    protected $table = "kasusglobals";

    public function negara(){
        return $this->belongsTo('App\Models\Negara', 'id_negara');
    }

    use HasFactory;
}
