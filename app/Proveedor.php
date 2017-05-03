<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    public function domicilio(){
      return $this->belongsToMany('App\Domicilio');
    }
    public function email(){
      return $this->belongsToMany('App\Email');
    }
    public function telefono(){
      return $this->belongsToMany('App\Telefono');
    }
}
