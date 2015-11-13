@extends('FootballClubs.sample')

@section('title', 'Edit')

@section('body')
<h1>Edit football club</h1>

{!! Form::open(['action' => 'FootballClubsController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection
