<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Linea_compra extends Model
{
    //
    public function compra(){
      return $this->belongsTo('App\Compra');
    }
}
