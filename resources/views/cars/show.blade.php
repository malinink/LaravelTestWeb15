@extends('cars.layout')

@section('title', 'Car show')

@section('content')
<h1>SHOWING A CAR</h1>
<table class='table'>
    <tr>
        <th>#</th>
        <th>Identity</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Color</th>
    </tr>
    <tr>
        <td>{!! $car['id'] !!}</td>
        <td>{!! $car['identity'] !!}</td>
        <td>{!! $car['brand'] !!}</td>
        <td>{!! $car['model'] !!}</td>
        <td>{!! $car['color'] !!}</td>
    </tr>
</table>
{!! link_to_action('CarsController@index', 'Back to index', [], 
    ['class' => 'btn btn-success']) !!}
@endsection
