@extends('FootballClubs.sample')

@section('title', 'Create')

@section('body')
<h1/>Create football club</h1>

{!! Form::open(['action' => 'FootballClubsController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection

