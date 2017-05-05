<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventum extends Model
{

    protected $table= "ventas";
    public function empleado(){
      return $this->belongsTo('App\Empleado');
    }

    public function cuenta(){
      // return $this->hasMany('App\Cuentum','cuenta_venta','cuenta_id','venta_id');
      return $this->hasMany('App\Cuentum');
    }
}
