<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;

use Illuminate\Support\Facades\DB;

class ActorsController extends Controller
{
    public function directory()
    {
        $actors = Actor::all();
        return view('actors')->with('Actors', $actors);

    }

    public function show($id)
    {
        $actor_id = Actor::find($id);

        $actors = DB::table('movies')->join('actors', 'actors.favorite_movie_id', '=', 'movies.id') ->select('actors.first_name', 'actors.last_name', 'actors.rating', 'actors.id',  'movies.title')->where('actors.id', '=', $actor_id->id)->get();



        return view('actor')->with('Actor', $actors);
    }

    public function buscar(Request $request)
    {
        $actors = Actor::where('first_name', 'LIKE', "%". $request->parte. "%")->get();
       return view('actors')->with('Actors', $actors);

    }

}
