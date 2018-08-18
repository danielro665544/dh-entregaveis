{{$genero->name}}
<ul>
    @foreach($genero->movies as $key=>$filme)
        <li>{{$filme['title']}}</li>
@endforeach