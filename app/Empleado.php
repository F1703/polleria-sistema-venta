<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    public function email(){
      return $this->belongsToMany('App\Email');
    }
    public function telefono(){
      return $this->belongsToMany('App\Telefono');
    }
    public function domicilio() {
      return $this->hasOne('App\Domicilio');
    }
}
