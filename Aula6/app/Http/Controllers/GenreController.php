<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
class GenreController extends Controller
{
    public function show($id)
    {
        $genero = Genre::find($id);
        return view('showGenre')->with('genero', $genero);
    }
}
