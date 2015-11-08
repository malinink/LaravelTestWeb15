@extends('layouts.master')

@section('title', 'Edit')

@section('content')
    
<h2>Edit Country</h2>

{!! Form::model($country, ['action' => ['CountriesController@update', $country['id']], 'method' => 'PUT']) !!}

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

{!! Form::label('Year of Foundation') !!}
{!! Form::text('year', null, ['class' => 'form-control']) !!}

{!! Form::label('Sibling') !!}
{!! Form::text('sibling', null, ['class' => 'form-control']) !!}

<br>
<br>
<br>
{!! Form::submit('Update', ['class' => 'btn btn-default']) !!}
{!!Form::close()!!}
@stop
