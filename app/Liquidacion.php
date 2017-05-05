<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liquidacion extends Model
{

    protected $table = 'liquidacions';
    protected $fillable = ['sueldoneto','fechadesde','fechahasta','periodo','estado','empleado_id'];

		public function empleado(){
      return $this->belongsTo('App\empleado');
    }
		public function concepto(){
			return $this->belongsToMany('App\Concepto','liquidacion_concepto','monto','descuento','subtotal','liquidacion_id','concepto_id');
		}
}
