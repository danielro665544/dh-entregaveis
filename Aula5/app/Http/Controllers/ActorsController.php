<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Filme;
class ActorsController extends Controller
{
    public function formadicionar()
    {
        $movies = Filme::all();
        $atores = Actor::where('first_name', 'LIKE', '%')
        ->orderBy('first_name')
        ->get();
        return view('actors/add')
            ->with('atores', $atores)
        ->with('movies', $movies);

    }

    public function adicionar(Request $request)
    {
        $atores = Actor::all();
        $movies = Filme::all();
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'favorite_movie_id' => 'required'

        ]);



        $actor = Actor::create([

            'first_name' => $request ->input('first_name'),
            'last_name' => $request ->input('last_name'),
            'favorite_movie_id' => $request ->input('favorite_movie_id')


        ]);

        $sucesso = $actor->save();


        if ($sucesso)
        {
            return view('actors/add')->with('sucesso', true)
                ->with('atores', $atores)
                ->with('movies', $movies);
        }
        else
        {
            return view('actors/add')->with('erro', true)
                ->with('atores', $atores)
                ->with('movies', $movies);
        }

    }



}
