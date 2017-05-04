<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $table = 'productos';
    protected $fillable = ['codigo','descripcion','tipo','stock','stock_min','categoria_id'];

    public function linea_compra(){
    	return $this->belongsTo('App\Linea_compra');
    }
    public function categoria(){
    	return $this->hasOne('App\Categorum');
    }
    public function producto_descripcion(){
    	return $this->hasMany('App\Producto_descripcion');
    }
    public function linea_venta(){
      return $this->belongsTo('App\Linea_ventum');
    }
}
