<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea_compra extends Model
{

	protected $table = 'linea_compras';
    protected $fillable = ['cantidad','subtotal','producto_id','compra_id'];

    public function compra(){
    	return $this->belongsTo('App\Compra');
    }
    public function producto(){
    	return $this->hasOne('App\Producto');
    }
}
