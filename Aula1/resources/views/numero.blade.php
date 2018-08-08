@if(isset($numero2))
    {{$numero * $numero2}}

@elseif($numero % 2 >0)
    O numero é impar
@else
    O numero é par
@endif



