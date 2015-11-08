@extends('Computers.sample')

@section('title', 'Create')

@section('body')
<h1>Create computer</h1>

{!! Form::open(['action' => 'ComputersController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection