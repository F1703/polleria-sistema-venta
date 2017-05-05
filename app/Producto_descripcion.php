<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto_descripcion extends Model
{
    //
    public function producto(){
      $this->belongsToMany('App\Producto');
    }

    public function lineaventa(){
      return $this->hasOne('App\Linea_ventum');
    }
}
