<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorium extends Model
{

	protected $table = 'categorias';
    protected $fillable = ['categoria']; 

    public function producto(){
 		return $this->belongsTo('App\Prodcuto');
    }
}
