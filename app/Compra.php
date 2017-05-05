<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
    public function lineacompra(){
      return $this->hasMany('App\Linea_compra');
    }
}
