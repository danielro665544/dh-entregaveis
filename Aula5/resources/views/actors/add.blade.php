<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Adicionar Ator</title>
</head>
<body>
<h1 align="center">Formulário</h1>


@if (count($errors) > 0)
    <div class="alert alert-danger">

        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        @if(isset($sucesso))
            Ator adicionado com sucesso !!
        @endif

        @if(isset($erro))
            Ator não foi adicionado !!
        @endif

        <form action="/actors/add/" method="POST">

            {{csrf_field()}}


            <div class="form-group col-6 m-auto">
                <label for="titulo">Nome</label>
                <input type="text" class="form-control" name="first_name"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Sobrenome</label>
                <input type="text" class="form-control" name="last_name"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="filme_favorito">Filme Favorito</label><p>
                <select name="favorite_movie_id">

                    @foreach($movies as $movie)
                    <option value="{{$movie->id}}">{{$movie->title}}</option>
                    @endforeach
                </select>


            </div>
            <br>
            <div class="form-group col-6 m-auto">
                <input type="submit" value="Adicionar Ator" name="submit" class="btn btn-primary"/>
            </div>
        </form>
</body>

@foreach($atores as $ator)
    {{$ator->getNomeCompleto()}} - {{$ator->getFilmeFavorito['title']}}<br>
    @endforeach
</html>
