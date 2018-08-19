<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';

    public function getGenre()
    {
        return $this->hasOne(Genre::class, 'id', 'genre_id');
    }

    public function getActors()
    {
        return $this->belongsToMany('Actor', 'actor_movie', 'actor_id', 'movie_id');
    }
}
