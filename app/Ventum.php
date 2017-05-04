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
    public function linea_venta(){
      return $this->hasMany('App\Linea_ventum');
    }
}
