<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Filme;

class FilmesController extends Controller
{
    public function formulario()
    {
        return view('formularioFilme');

    }

    public function adicionarFilme(Request $request)
    {
        $this->validate($request, [
            'title' => 'required | unique:movies',
            'rating' => 'numeric | max:20',
            'awards' => 'numeric | max:20',
            'length' => 'numeric',
            'date' => 'date',
        ]);

        $filme = Filme::create([

            'title' => $request ->input('title'),
            'rating' => $request ->input('rating'),
            'awards' => $request ->input('awards'),
            'length' => $request->input('length'),
            'release_date' => $request->input('date'),

        ]);

        $sucesso = $filme->save();

        if ($sucesso)
        {
            return view('formulariofilme')->with('sucesso', true);
        }
        else
        {
            return view('formulariofilme')->with('erro', true);
        }
    }
}
