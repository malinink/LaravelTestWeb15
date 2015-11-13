@extends('FootballClubs.sample')

@section('title', 'Destroy')

@section('body')
<h1>Destroy football club</h1>

{!! Form::open(['action' => 'FootballClubsController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection
