@extends('FootballClubs.sample')

@section('title', 'Store')

@section('body')
<h1>There are not some football club at the moment</h1>

{!! Form::open(['action' => 'FootballClubsController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection
