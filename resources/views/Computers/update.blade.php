@extends('Computers.sample')

@section('title', 'Update')

@section('body')
<h1>Update your computer!</h1>

{!! Form::open(['action' => 'ComputersController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button'])!!}
{!! Form::close() !!}

@endsection
