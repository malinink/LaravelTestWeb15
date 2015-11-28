@extends('cars.layout')

@section('title', 'Car create')

@section('content')
<h1>ADD A NEW CAR</h1>
{!! Form::open(['action' => 'CarsController@store', 'method' => 'POST']) !!}

{!! Form::label(' Identity') !!}
{!! Form::text('identity', null, ['class' => 'form-control']) !!}

{!! Form::label(' Brand') !!}
{!! Form::text('brand', null, ['class' => 'form-control']) !!}

{!! Form::label(' Model') !!}
{!! Form::text('model', null, ['class' => 'form-control']) !!}

{!! Form::label(' Color') !!}
{!! Form::text('color', null, ['class' => 'form-control']) !!}
<br>
{!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}
{!! Form::close() !!}
@endsection
