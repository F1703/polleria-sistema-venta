<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    public function categoria(){
      return $this->belongsToMany('App\Categorium');
    }

    public function descripcionproducto(){
      return $this->hasMany('App\Producto_descripcion');
    }
}
