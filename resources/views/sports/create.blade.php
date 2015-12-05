@extends('sports.layouts')
@section('title','Create')
@section('content')

<h1>CREATE</h1>
{!! Form::open(['action' => 'Sports@store','method' => 'post'])!!}

{!! Form::label('Identity') !!}
{!! Form::text('identity',null, ['class' => 'form-control']) !!}

{!! Form::label('Name') !!}
{!! Form::text('name',null, ['class' => 'form-control']) !!}

{!! Form::label('Count') !!}
{!! Form::text('count',null, ['class' => 'form-control']) !!}

<br>
{!!Form::submit('Create', ['class' => 'btn btn-primary ']) !!}
{!!Form::close()!!}
@endsection
