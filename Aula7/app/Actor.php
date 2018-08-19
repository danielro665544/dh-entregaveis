<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actors';

    public function GetNomeCompleto()
    {
        return $this->first_name. " ". $this->last_name;
    }


    public function GetMovies()
    {
        return $this->belongsToMany('Movie', 'actor_movie', 'actor_id', 'movie_id');
    }

}
