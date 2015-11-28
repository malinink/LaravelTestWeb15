@extends('cars.layout')

@section('title', 'Cars index')

@section('content')
<h1>CARS</h1>
<table class='table'>
    <tr>
        <th>#</th>
        <th>Identity</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Color</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($cars as $car)
    <tr>
        <td>{!! $car['id'] !!}</td>
        <td>{!! link_to_action('CarsController@show', $car['identity'], 
            [$car['id']]) !!}</td>
        <td>{!! $car['brand'] !!}</td>
        <td>{!! $car['model'] !!}</td>
        <td>{!! $car['color'] !!}</td>
        <td>{!! link_to_action('CarsController@edit', 'Edit', [$car['id']], 
            ['class' => 'btn btn-warning']) !!}</td>
        <td>{!! Form::open(['action' => ['CarsController@destroy', $car['id']], 
            'method' => 'delete']) !!}
            {!! Form::submit('Destroy', ['class' => 'btn btn-info']) !!}
            {!! Form::close() !!}</td>
    </tr>
    @endforeach
</table>
{!! link_to_action('CarsController@create', 'Create', [], 
    ['class' => 'btn btn-success']) !!}
@endsection
