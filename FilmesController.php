<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Actor;
use App\Genre;

class FilmesController extends Controller
{
   public function procurarFilmeId($id){
    $filmes = Actor::find($id);
    
    $nome = $filmes->first_name;

    return view('filme')->with('nome', $nome);
    
  

   }

   public function procurarFilmeNome($nome){
    $filmes = [
        "Toy Story",
        "Procurando Nemo",
        "Avatar",
        "Star Wars: Episódio V",
        "up",
        "Mary e Max"
        ];
    

    foreach($filmes as $filme){
        if ($filme == $nome){
            
            return view('ProcurarFilme')->with('nome', $nome);
            die;
        }
    }

    return view('ProcurarFilme')->with('nome', 'Não foi encontrado esse filme');

    
       
     

   }

   public function ListarFilmes(){
    $filmes = [
        "Toy Story",
        "Procurando Nemo",
        "Avatar",
        "Star Wars: Episódio V",
        "Up",
        "Mary e Max"
        ];
    

        return view('filme')->with('filmes', $filmes);
           
            }
        

   
    public function Adicionar(Request $request){
               
            
        $this->validate($request, [
            'titulo' => 'required',
            'classificacao' => 'required',
            'premios' => 'required',
            'duracao' => 'required',
            'dia' => 'required | numeric',
            'mes' => 'required | numeric',
            'ano' => 'required | numeric'
        ]);
        $titulo = $request->input('titulo');

        $filmes = Movie::where('title', $titulo )->get();

      
        if(count($filmes) > 0){
            return view('form')->with('JaExiste', 'Filme já existe');
            
        }
        else
        {

           $CadastrarFilme = Movie::create([
               'title' => $titulo,
               'rating' => 2,
               'release_date' => 2,
           ]);
           $CadastrarFilme->save();

            return view('form')->with('JaExiste', 'Filme cadastrado');
        }
        
    
         }   
                        



  
       
     

   }

