<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $fillable = ['name','content'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class); // ou App\Tag
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class); // ou App\Categorie
    }

    public function commentaires()
    {
        return $this->belongsToMany(Commentaire::class); // ou App\Categorie
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id');
    }
    public function roles()
    {
        return $this->belongsTo('App\Image','');
    }
    public function tagArticle()
    {
        return $this->hasMany('App\Article_tag');
    }

}
