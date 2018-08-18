<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
class ActorsController extends Controller
{
    public function formadicionar()
    {
        $atores = Actor::where('first_name', 'LIKE', '%')
        ->orderBy('first_name')
        ->get();
        return view('actors/add')
            ->with('atores', $atores);

    }

    public function adicionar(Request $request)
    {
        $atores = Actor::all();
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',

        ]);

        $actor = Actor::create([

            'first_name' => $request ->input('first_name'),
            'last_name' => $request ->input('last_name'),


        ]);

        $sucesso = $actor->save();


        if ($sucesso)
        {
            return view('actors/add')->with('sucesso', true)
                ->with('atores', $atores);
        }
        else
        {
            return view('actors/add')->with('erro', true)
                ->with('atores', $atores);
        }

    }

    public function edit($id)
    {
        $ator = Actor::find($id);


        return view('actors/form_edit')->with('ator', $ator);
    }

    public function update(Request $request)
    {
        $ator = Actor::find($request->id);
        $ator->first_name = $request->input('first_name');
        $ator->last_name = $request->input('last_name');

        $ator->save();
        $atores = Actor::all();
        return view('actors/add')->with('atores', $atores);
    }

    public function delete($id)
    {
        $ator = Actor::find($id);
        $ator->delete();
        $atores = Actor::all();

        return view('actors/add')->with('atores', $atores);

    }

}
