@extends('Computers.sample')

@section('title', 'Store')

@section('body')
<h1>Nothing to show :(</h1>

{!! Form::open(['action' => 'ComputersController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection
