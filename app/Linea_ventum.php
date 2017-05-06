<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea_ventum extends Model
{

	  protected $table = 'linea_venta';
    protected $fillable = ['cantidad','subtotal','producto_id','venta_id'];

    public function venta(){
      return $this->belongsToMany('App\Ventum','venta_id','producto_id','cantidad','subtotal');
    }
    public function producto(){
      return $this->belongsTo('App\Producto');
    }
}
