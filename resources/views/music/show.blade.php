@extends('layoutmusic')
@section('content')
show
<hr>
Singername: {{$music->singername}}
<hr>
Style: {{$music->style}}
<hr>
instrument: {{$music->instrument}}
<hr>
@stop
