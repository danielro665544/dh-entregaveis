@foreach($Actor as $ac)

    <br>Id: {{$ac->id}}
    <br>Nome Completo: {{$ac->first_name}}  {{$ac->last_name}}
    <br>Rating: {{$ac->rating}}
    <br>Filme Favorito: {{$ac->title}}
    @endforeach