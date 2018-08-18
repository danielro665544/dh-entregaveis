@foreach($movies as $movie)
    <h3>{{$movie->title}}</h3>

<ul>
    @foreach($movie->getAtores as $key=>$ator)
        <li>{{$ator->getNomeCompleto()}}</li>
    @endforeach

</ul>
    @endforeach