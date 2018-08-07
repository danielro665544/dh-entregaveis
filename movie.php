<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    protected $movie ="movies";
    protected $fillable = ['title', 'rating'];

}
