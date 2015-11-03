@extends('cars.layout')

@section('title', 'Cars index')

@section('content')
<h1>Car index page</h1>
{!! link_to_action('CarsController@create', 'Create', [], ['class' => 'btn btn-success', 'style' => 'display:inline-block']) !!}
{!! Form::open(array('action' => 'CarsController@store', 'method' => 'post', 'style' => 'display:inline-block')) !!}
{!! Form::submit('Store', ['class' => 'btn btn-default']) !!}
{!! Form::close() !!}
{!! link_to_action('CarsController@show', 'Show', ['car' => 'bugatti'], ['class' => 'btn btn-primary', 'style' => 'display:inline-block']) !!}
{!! link_to_action('CarsController@edit', 'Edit', ['car' => 'bugatti'], ['class' => 'btn btn-danger', 'style' => 'display:inline-block']) !!}
{!! Form::open(array('action' => ['CarsController@update', 'car' => 'bugatti'], 'method' => 'put', 'style' => 'display:inline-block')) !!}
{!! Form::submit('Update', ['class' => 'btn btn-warning']) !!}
{!! Form::close() !!}
{!! Form::open(array('action' => ['CarsController@destroy', 'car' => 'bugatti'], 'method' => 'delete', 'style' => 'display:inline-block')) !!}
{!! Form::submit('Destroy', ['class' => 'btn btn-info']) !!}
{!! Form::close() !!}
@endsection