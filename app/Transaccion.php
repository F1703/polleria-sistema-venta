<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    
    public function Cuenta(){
    	return $this->belongsTo('App\Cuentum');
    }
}
