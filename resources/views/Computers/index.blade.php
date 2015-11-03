@extends('Computers.sample')

@section('title', 'Computers')

@section('body')
<h1>Computers</h1>

<h2>What will you choose?</h2>

{!! link_to_action('ComputersController@create', 'create', [], ['class' => 'button', 'style'=>'display:inline']) !!}

{!! Form::open(['action' => 'ComputersController@store', 'method' => 'POST', 'style'=>'display:inline']) !!}
{!! Form::submit('store', ['class' => 'button']) !!}
{!! Form::close() !!}

{!! link_to_action('ComputersController@show', 'show', ['id' => '1'], ['class' => 'button', 'style'=>'display:inline']) !!}

{!! link_to_action('ComputersController@edit', 'edit', ['id' => '2'], ['class' => 'button', 'style'=>'display:inline']) !!}

{!! Form::open(['action' => ['ComputersController@update', 'id' => '3'], 'method'=>'POST', 'style'=>'display:inline']) !!}
{!! Form::submit('update', ['class' => 'button']) !!}
{!! Form::close() !!}

{!! Form::open(['action' => ['ComputersController@destroy', 'id' => '4'], 'method'=>'DELETE', 'style'=>'display:inline']) !!}
{!! Form::submit('destroy', ['class' => 'button']) !!}
{!! Form::close() !!}

@endsection
