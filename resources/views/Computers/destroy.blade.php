@extends('Computers.sample')

@section('title', 'Destroy')

@section('body')
<h1>Destroy computer</h1>

{!! Form::open(['action' => 'ComputersController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection
