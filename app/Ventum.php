<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventum extends Model
{
    public function empleado(){
      return $this->belongsTo('App\Empleado');
    }
}
