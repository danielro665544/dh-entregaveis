<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Editar Ator Ator</title>
</head>
<body>
<h1 align="center">Editar Ator</h1>






        <form action="/actor/edit" method="POST">

            {{csrf_field()}}


            <div class="form-group col-6 m-auto">
                <label for="titulo">Nome</label>
                <input type="text" class="form-control" name="first_name" value="{{$ator->first_name}}"/>
            </div>
            <div class="form-group col-6 m-auto">
                <label for="classificacao">Sobrenome</label>
                <input type="text" class="form-control" name="last_name" value="{{$ator->last_name}}"/>
            </div>


            <br>
            <div class="form-group col-6 m-auto">
                <input type="hidden" class="form-control" name="id" value="{{$ator->id}}"/>
                <input type="submit" value="Modificar Ator" name="submit" class="btn btn-primary"/>
            </div>
        </form>

</body>

</html>
