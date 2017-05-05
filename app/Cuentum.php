<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuentum extends Model
{
    //

    protected $table ="cuentas";

    public function cliente(){
    	return $this->belongsTo('App\cliente');
    }
    public function transaccion(){
    	return $this->hasMany('App\Transaccion');
    }

    public function venta(){
      return $this->belongsToMany('App\Ventum','cuenta_venta','cuenta_id','venta_id')->withTimestamps();
      // return $this->belongsToMany('App\Ventum');
    }
}
