<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;
use App\Genre;

class FilmesController extends Controller
{
    public function formadicionar()
    {
        $generos = Genre::all();
        return view('formularioFilme')
            ->with('generos', $generos);

    }

    public function adicionar(Request $request)
    {
        $generos = Genre::all();
        $this->validate($request, [
            'title' => 'required | unique:movies',
            'rating' => 'numeric | max:20',
            'awards' => 'numeric | max:20',
            'length' => 'numeric',
            'date' => 'date',
            'genre_id' => 'numeric'
        ]);

        $filme = Filme::create([

            'title' => $request ->input('title'),
            'rating' => $request ->input('rating'),
            'awards' => $request ->input('awards'),
            'length' => $request->input('length'),
            'release_date' => $request->input('date'),
            'genre_id' => $request->input('genre_id')

        ]);

        $sucesso = $filme->save();



            return view('formularioFilme')->with('sucesso', true)
                ->with('generos', $generos)
            ->with('teste', $request->input('genre_id'));



    }


    public function filmesComAtores()
    {
        $movies = Filme::all();
        return view('showFilmesComAtores')->with('movies', $movies);
    }
}
