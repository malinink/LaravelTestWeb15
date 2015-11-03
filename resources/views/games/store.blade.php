@extends("games.template")

@section("content")

    <h1>Games Store</h1>

    <hr>

    {!! HTML::linkAction('GamesController@index', 'Main Menu', array(), array('class' => 'btn btn-default')) !!}

@stop
