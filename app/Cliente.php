<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
        
    public function domicilio(){

      //Un cliente tiene un domicilio
      return $this->hasOne('App\Domicilio');
    }
    public function cuenta(){
    	return $this->hasOne('App\Cuentum');
    }
}
