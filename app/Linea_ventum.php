<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea_ventum extends Model
{
    //
    public function producto(){
      return $this->belongsTo('App\Producto');
    }
}
