<<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Adicionar Filme</title>
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
    </div>
@endif

@if(isset($sucesso))
    Filme adicionado com sucesso !!
    @endif

@if(isset($erro))
    Filme não foi adicionado !!
    @endif

<form action="/" method="POST">

    {{csrf_field()}}


    <div class="form-group col-6 m-auto">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" name="title"/>
    </div>
    <div class="form-group col-6 m-auto">
        <label for="classificacao">Classificação</label>
        <input type="text" class="form-control" name="rating"/>
    </div>
    <div class="form-group col-6 m-auto">
        <label for="premios">Prêmios</label>
        <input type="text" class="form-control" name="awards"/>
    </div>
    <div class="form-group col-6 m-auto">
        <label for="duracao">Duração</label>
        <input type="text" class="form-control" name="length"/>
    </div>
    <div class="form-group col-6 m-auto">
        <label for="duracao">Data</label>
        <input type="date" class="form-control" name="date"/>
    </div>

    <br>
    <div class="form-group col-6 m-auto">
        <input type="submit" value="Adicionar Filme" name="submit" class="btn btn-primary"/>
    </div>
</form>
</body>
</html>
