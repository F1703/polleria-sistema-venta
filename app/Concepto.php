<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Concepto extends Model
{
<<<<<<< HEAD
    //
    public function liquidacion(){
      return $this->belongsToMany('App\Liquidacion','liquidacion_concepto','monto','descuento','subtotal','liquidacion_id','concepto_id');
=======
    
	protected $table = 'conceptos';
	protected $fillable = ['monto','montofijo','montovariable','tipo'];

    public function liquidacion(){
    	return $this->belongsToMany('App\Liquidacion');
>>>>>>> c3a73ad7d6ac39c1a87049d5ba88f67d9bfc342e
    }
}
