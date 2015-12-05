
@extends('sports.layouts')
@section('title','Edit')
@section('content')

<h1>EDIT</h1>
{!! Form::model($sport, ['action' => ['Sports@update', $sport['id']],'method' => 'put'])!!}

{!! Form::label('Identity') !!}
{!! Form::text('identity',null, ['class' => 'form-control']) !!}

{!! Form::label('Name') !!}
{!! Form::text('name',null, ['class' => 'form-control']) !!}

{!! Form::label('Count') !!}
{!! Form::text('count',null, ['class' => 'form-control']) !!}

<br>
{!!Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!}
@endsection