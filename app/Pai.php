<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pai extends Model
{
    //
    protected $table="pais";
    protected $fillable=['pais'];

    public function provincia(){
      return $this->hasMany('App\Provincium');
    }
}
