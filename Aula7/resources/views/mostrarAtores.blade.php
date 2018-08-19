
@foreach($atores as $ator)
        <br>{{$ator->GetNomeCompleto()}}
    @endforeach


{{$atores->links()}}