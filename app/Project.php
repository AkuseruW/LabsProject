<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function iconeProject(){
        return $this->belongsTo('App\Icone','icones_Project');
    }
}
