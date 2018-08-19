<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;
class ActorController extends Controller
{
    public function mostrar($registros)
    {
        $atores = Actor::paginate($registros);
        return view('mostrarAtores')->with('atores', $atores);
    }


    public function ratingMaior7()
    {
        $atores = Actor::where('rating', '>', '7')
        ->get();

        $questao = "Mostrar apenas os atores com rating maior que 7";
        return view('resultado')->with('resultado', $atores)
            ->with('questao', $questao);
    }

    public function filmesDeTerror()
    {

        $filmes = Movie::where('genre_id', 7);


        $questao = "Mostrar apenas os atores que tenham trabalhado filmes de terror";
        return view('resultado2')->with('resultado', $filmes)
            ->with('questao', $questao);

    }



}