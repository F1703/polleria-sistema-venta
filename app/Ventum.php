<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventum extends Model
{


    protected $table = 'ventas';
    protected $fillable = ['monto','fecha','empleado_id'];

    public function empleado(){
      return $this->belongsTo('App\Empleado');
    }
    public function lineaventa(){
      return $this->hasMany('App\Linea_ventum','venta_id');
    }

    public function cuenta(){
      // return $this->hasMany('App\Cuentum','cuenta_venta','cuenta_id','venta_id');
      return $this->hasMany('App\Cuentum');
    }
}
