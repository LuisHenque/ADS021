<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moradores extends Model
{
    public function condominio()
    {
        return $htis->belongsTo('App\Coniminios');
    }
}
