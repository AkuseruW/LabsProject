<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icone extends Model
{
    public function service(){
        return $this->hasMany('App\Service');
    }
    public function project(){
        return $this->hasMany('App\Project');
    }
}
