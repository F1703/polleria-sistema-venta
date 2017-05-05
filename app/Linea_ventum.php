<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea_ventum extends Model
{

	  protected $table = 'linea_ventas';
    protected $fillable = ['cantidad','subtotal','producto_id','venta_id'];

    public function venta(){
      return $this->belongsTo('App\Ventum');
    }
    public function producto(){
      return $this->belongsTo('App\Producto');
    }
}
