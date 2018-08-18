<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $table = 'movies';
    protected $fillable = ['title', 'rating', 'awards', 'length', 'date', 'genre_id'];

    public function getAtores()
    {
        return $this->belongsToMany(Actor::class, 'actor_movie', 'movie_id', 'actor_id');
    }
}

