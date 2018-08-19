<h3>{{$questao}}</h3>
<ul>

@foreach($resultado as $ator)
<li>
{{$ator->GetNomeCompleto()}} - {{$ator->rating}}
</li>
    @endforeach
</ul>