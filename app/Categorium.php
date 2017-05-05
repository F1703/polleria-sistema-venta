<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorium extends Model
{
    //
    protected $table = "categorias";
    public function producto(){
      return $this->hasMany('App\Producto');
    }
}
