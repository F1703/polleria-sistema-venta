<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    public function domicilio(){
      return $this->belongsToMany('App\Domicilio');
    }


}
