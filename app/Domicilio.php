<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{

    protected $table = 'domicilios';
    protected $fillable = ['direccion','numero','barrio','localidad_id'];

    public function proveedor(){
      return $this->hasMany('App\Proveedor');
    }
    public function empleado(){
      return $this->belongsTo('App\Empleado');
    }

    public function cliente(){
      return $this->belongsTo('App\Cliente');
    }
    public function localidad(){
      return $this->belongsToMany('App\Localidad');
    }


}
