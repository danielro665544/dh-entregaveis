<h3>{{$questao}}</h3>
<ul>

    @foreach($resultado as $filme)
        <li>
            {{$filme->title}}
        </li>
    @endforeach
</ul>