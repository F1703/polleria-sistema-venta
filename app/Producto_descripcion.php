<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_descripcion extends Model
{

	 protected $table = 'producto_descripcions';
    protected $fillable = ['preciocompra','precioventa','vencimiento','producto_id'];

    public function producto(){
      $this->belongsTo('App\Producto','id');
    }

    public function lineaventa(){
      return $this->hasOne('App\Linea_ventum');
    }
}
