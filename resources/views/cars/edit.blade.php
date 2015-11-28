@extends('cars.layout')

@section('title', 'Car edit')

@section('content')
<h1>CAR EDIT</h1>
{!! Form::model($car, ['action' => ['CarsController@update', $car['id']], 'method' => 'PUT']) !!}

{!! Form::label('Identity') !!}
{!! Form::text('identity', null, ['class' => 'form-control']) !!}

{!! Form::label('Brand') !!}
{!! Form::text('brand', null, ['class' => 'form-control']) !!}

{!! Form::label('Model') !!}
{!! Form::text('model', null, ['class' => 'form-control']) !!}

{!! Form::label('Color') !!}
{!! Form::text('color', null, ['class' => 'form-control']) !!}
<br>
{!! Form::submit('Update', ['class' => 'btn btn-warning']) !!}
{!! Form::close() !!}
@endsection
