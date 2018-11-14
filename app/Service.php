<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function iconeService(){
        return $this->belongsTo('App\Icone','icones_id');
    }
}
