<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liquidacion extends Model
{    

	public function empleado(){
      return $this->belongsTo('App\empleado');
    }
}
