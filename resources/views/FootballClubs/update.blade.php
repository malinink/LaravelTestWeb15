@extends('FootballClubs.sample')

@section('title', 'Update')

@section('body')
<h1>Update your page!</h1>

{!! Form::open(['action' => 'FootballClubsController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button'])!!}
{!! Form::close() !!}

@endsection
