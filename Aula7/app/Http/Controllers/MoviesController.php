<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function orderByName()
    {
        $filmes = Movie::all();
        $filmesOrder = $filmes->sortBy('title');
        $questao = "Eles apareçam organizados por nome.";

        return view('resultado2')->with('resultado', $filmesOrder)
            ->with('questao', $questao);

    }

    public function orderByLength()
    {
        $filmes = Movie::all();
        $filmesOrder = $filmes->sortBy('length');
        $questao = "Eles apareçam organizados por duração.";

        return view('resultado2')->with('resultado', $filmesOrder)
            ->with('questao', $questao);

    }

    public function aleatorio()
    {
        $filmes = Movie::all();
        $filmesOrder = $filmes->shuffle();
        $questao = "Eles apareçam organizados de forma aleatória.";

        return view('resultado2')->with('resultado', $filmesOrder)
            ->with('questao', $questao);

    }

    public function maisde90()
{
    $filmes = Movie::where('length', '>', 90)
        ->get();

    $questao = "Apareçam apenas os filmes que duram mais de 90 minutos";

    return view('resultado2')->with('resultado', $filmes)
        ->with('questao', $questao);

}

    public function maisde90rating5()
    {
        $filmes = Movie::where('length', '>', 90)->orwhere('rating', '>', 5)
            ->get();

        $questao = "Apareçam apenas os filmes que duram mais de 90 minutos ou rating maior que 5";

        return view('resultado2')->with('resultado', $filmes)
            ->with('questao', $questao);

    }
}
