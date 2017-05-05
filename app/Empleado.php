<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['turno','nombre','apellido','dni','cuil','fechanacimiento','telefono','sexo','cargo','domicilio_id'];

    public function liquidacion(){
      return $this->hasOne('App\Liquidacion');
    }
    public function venta(){
      return $this->hasMany('App\Ventum');
    }
    public function domicilio() {
      return $this->hasOne('App\Domicilio');
    }
    public function usuario() {
      return $this->hasOne('App\Usuario');
    }
}
