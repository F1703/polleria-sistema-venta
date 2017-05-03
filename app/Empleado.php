<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    public function liquidacion(){
      return $this->hasOne('App\Liquidacion');
    }
    public function venta(){
      return $this->hasMany('App\Ventum');
    }
    public function domicilio() {
      return $this->hasOne('App\Domicilio');
    }
    public function user() {
      return $this->hasOne('App\User');
    }
}
