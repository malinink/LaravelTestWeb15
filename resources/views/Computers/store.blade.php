@extends('Computers.sample')

@section('body')
<h1>Store</h1>

{!! Form::open(['action' => 'ComputersController@index', 'method' => 'GET', 'style'=>'display:inline']) !!}
{!! Form::submit('back', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection
