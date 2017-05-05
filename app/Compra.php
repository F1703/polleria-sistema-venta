<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
<<<<<<< HEAD
    //
    public function lineacompra(){
      return $this->hasMany('App\Linea_compra');
=======
	protected $table = 'compras';
    protected $fillable = ['monto','fechacompra','empleado_id','proveedor_id']; 

    public function compra(){
    	return $this->hasMany('App\Linea_compra');
    }
    public function proveedor(){
    	return $this->belongsTo('App\Proveedor');
>>>>>>> c3a73ad7d6ac39c1a87049d5ba88f67d9bfc342e
    }
}
