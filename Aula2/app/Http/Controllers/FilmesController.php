<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmesController extends Controller
{
    public function procurarFilmeId($id)
    {
        $filmes = [ 1 => "Toy Story", 2 => "Procurando Nemo", 3 => "Avatar", 4 => "Star Wars: Episódio V", 5 => "Up", 6 => "Mary e Max" ];
        $count = count($filmes);
        if($id > $count)
        {
            return view('filme')->with('naoExiste', true);
        }

        else {


            $filme = $filmes[$id];
            return view('filme')->with('filme', $filme);
        }

            }

    public function procurarFilmeNome($nome)
    {
        $filmes = [ 1 => "Toy Story", 2 => "Procurando Nemo", 3 => "Avatar", 4 => "Star Wars: Episódio V", 5 => "Up", 6 => "Mary e Max" ];
        foreach($filmes as $key=>$filme){
            if($filme == $nome){
                echo $nome;
                die;
            }

        }
            echo "Não foram encontrados resultados";


    }

    public function adicionarFilme($filme)
    {
        $filmes = [ 1 => "Toy Story", 2 => "Procurando Nemo", 3 => "Avatar", 4 => "Star Wars: Episódio V", 5 => "Up", 6 => "Mary e Max" ];
        $sucesso = array_push($filmes, $filme);
        If(isset($sucesso)){
            echo "Filme adicionado <p>";
            var_dump($filmes);

        }
    }

    public function listarFilmes()
    {
        $filmes = [ 1 => "Toy Story", 2 => "Procurando Nemo", 3 => "Avatar", 4 => "Star Wars: Episódio V", 5 => "Up", 6 => "Mary e Max" ];
        return view('todosOsFilmes')->with('filmes', $filmes);

    }

}
