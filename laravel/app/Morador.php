<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Morador extends Model
{
    protected $table='moradores';
    public function condominio(){
        return $this->belongsTo('\App\Condominio');
   }
   public function unidade(){
        return $this->belongsTo('\App\Unidade');
   }
     
}