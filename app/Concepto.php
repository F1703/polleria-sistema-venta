<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
    protected $table = 'conceptos';
    protected $fillable = ['monto','montofijo','montovariable','tipo'];

    public function liquidacion(){
      return $this->belongsToMany('App\Liquidacion','liquidacion_concepto','monto','descuento','subtotal','liquidacion_id','concepto_id');
    }



}
