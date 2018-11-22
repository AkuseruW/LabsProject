<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article_tag extends Model
{
    protected $table = 'article_tag';

    public function articles()
    {
        return $this->belongsTo('App\Article','article_tag.id','article_tag.article_id','article.id');
    }
}
