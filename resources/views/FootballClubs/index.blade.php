@extends('FootballClubs.sample')

@section('title', 'Football clubs')

@section('body')
<h1>Football clubs</h1>

<h2>What is your choice?</h2>

{!! link_to_action('FootballClubsController@create', 'create', [], ['class' => 'button', 'style'=>'display:inline']) !!}

{!! Form::open(['action' => 'FootballClubsController@store', 'method' => 'POST', 'style'=>'display:inline']) !!}
{!! Form::submit('store', ['class' => 'button']) !!}
{!! Form::close() !!}

{!! link_to_action('FootballClubsController@show', 'show', ['id' => '1'], ['class' => 'button', 'style'=>'display:inline']) !!}

{!! link_to_action('FootballClubsController@edit', 'edit', ['id' => '2'], ['class' => 'button', 'style'=>'display:inline']) !!}

{!! Form::open(['action' => ['FootballClubsController@update', 'id' => '3'], 'method'=>'POST', 'style'=>'display:inline']) !!}
{!! Form::submit('update', ['class' => 'button']) !!}
{!! Form::close() !!}

{!! Form::open(['action' => ['FootballClubsController@destroy', 'id' => '4'], 'method'=>'DELETE', 'style'=>'display:inline']) !!}
{!! Form::submit('destroy', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection