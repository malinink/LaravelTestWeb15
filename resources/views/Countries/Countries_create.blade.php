@extends('layouts.master')

@section('title', 'Create')

@section('content')
<h2>Create Country!</h2>

{!! Form::open(['route' => 'countries.store', 'method' => 'POST']) !!}

{!! Form::label('Identity') !!}
{!! Form::text('identity', null, ['class' => 'form-control']) !!}

{!! Form::label('Name') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

{!! Form::label('Name in Anime') !!}
{!! Form::text('nameanime', null, ['class' => 'form-control']) !!}

{!! Form::label('Language') !!}
{!! Form::text('language', null, ['class' => 'form-control']) !!}

{!! Form::label('Area') !!}
{!! Form::text('area', null, ['class' => 'form-control']) !!}

<br>
<br>
<br>
{!! Form::submit('Create', ['class' => 'btn btn-default']) !!}
{!!Form::close()!!}
@stop
