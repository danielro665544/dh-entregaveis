<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table ='actors';
    protected $fillable = ['first_name', 'last_name', 'favorite_movie_id'];


    public function getNomeCompleto()
    {
        return $this->first_name. " ".$this->last_name;
    }


    public function getFilmeFavorito()
    {
        return $this->hasOne(Filme::class, 'id', 'favorite_movie_id');
    }
}
