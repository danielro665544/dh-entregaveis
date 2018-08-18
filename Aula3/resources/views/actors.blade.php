<h2>Atores</h2>
<form method="POST" action="/actors">
    {{ csrf_field() }}

    <input type="text" name="parte"><p>

    <input type="submit" value="Buscar">

    <form method="GET" action="/actors">
        {{ csrf_field() }}
        <input type="submit" value="Limpar">
    </form>


</form>

@foreach($Actors as $actor)
    <br>  <a href="/actor/{{$actor->id}}">{{$actor->getNomeCompleto($actor->id)}}</a>
@endforeach