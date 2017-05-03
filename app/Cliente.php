<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    
    public function domicilio(){
      return $this->belongsTo('App\Domicilio');
    }
}
