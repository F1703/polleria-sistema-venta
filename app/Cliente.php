<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{

	protected $table = 'clientes';
    protected $fillable = ['nombre','apellido','dni','email','telefono','domicilio_id'];



    public function domicilio(){

      //Un cliente tiene un domicilio
      return $this->belongsTo('App\Domicilio');
    }
    public function cuenta(){
    	return $this->hasOne('App\Cuentum');
    }
}
