<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    //
    public function provincia(){
      return $this->belongsToMany('App\Provincium');
    }

    public function scopeSearch($query,$idprovincia){
      return $query->where('idprovincia','=',$idprovincia);
    }
}
