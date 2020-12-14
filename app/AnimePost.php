<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnimePost extends Model
{
    /**
     * Define the relationships between the AnimePost model and Comment and User and Tag
     */
    public function comments() {
        return $this -> hasMany('App\Comment');
    }

    public function user() {
        return $this -> belongsTo('App\User');
    }

    public function tags() {
        return $this -> belongsToMany('App\Tag');
    }
}
