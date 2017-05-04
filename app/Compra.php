<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
	protected $table = 'compras';
    protected $fillable = ['monto','fechacompra','empleado_id','proveedor_id']; 

    public function compra(){
    	return $this->hasMany('App\Linea_compra');
    }
    public function proveedor(){
    	return $this->belongsTo('App\Proveedor');
    }
}
