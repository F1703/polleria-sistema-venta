<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    //
    public function proveedor(){
      return $this->belongsToMany('App\Proveedor');
    }
    public function empleado(){
      return $this->belongsTo('App\Empleado');
    }
    public function cliente(){
      return $this->hasOne('App\Cliente');
    }
}
