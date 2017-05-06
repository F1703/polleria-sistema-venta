<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{

    protected $table = 'productos';
    protected $fillable = ['codigo','descripcion','tipo','stock','stock_min','categoria_id'];

    public function categoria(){
      return $this->belongsTo('App\Categorium');
    }

    public function descripcionproducto(){
    	return $this->hasOne('App\Producto_descripcion','id');
    }


    public function lineacompra(){
      return $this->hasOne('App\Linea_compra','id');
    }

}
