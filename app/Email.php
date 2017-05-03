<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    //
    public function proveedor(){
      return $this->belongsToMany('App\Proveedor');
    }
    public function cliente(){
      return $this->belongsToMany('App\Cliente');
    }
    public function empleado(){
      return $this->belongsToMany('App\Empleado');
    }
}
