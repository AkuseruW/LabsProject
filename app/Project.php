<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function iconeProject(){
        return $this->belongsTo('App\Icone','icones_Project');
    }
    public function imageProject(){
        return $this->belongsTo('App\Image','image_id');
    }
}
