<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Define the relationships between the Comment model and User and AnimePost
     */
    public function user() {
        return $this -> belongsTo('App\User');
    }

    public function animePost() {
        return $this -> belongsTo('App\AnimePost');
    }
}
