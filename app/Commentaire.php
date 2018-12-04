<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }
    public function imgCommentaire()
    {
        return $this->belongsTo(ImageCommentaire::class, 'img_id');
    }
}
