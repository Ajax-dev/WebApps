<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /**
     * Define the relationships between the Tag model and User and AnimePost
     */
    public function posts()
    {
        return $this->belongsToMany('App\AnimePost');
    }
}
