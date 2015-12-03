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
        <th>Year</th>
        <th>Color</th>
        <th>Price</th>
    </tr>
    <tr>
        <td>{!! $car['id'] !!}</td>
        <td>{!! $car['identity'] !!}</td>
        <td>{!! $car['brand'] !!}</td>
        <td>{!! $car['model'] !!}</td>
        <td>{!! $car['year'] !!}</td>
        <td>{!! $car['color'] !!}</td>
        <td>{!! $car['price'] !!}</td>
    </tr>
</table>
{!! link_to_action('CarsController@index', 'Back to index', [], 
    ['class' => 'btn btn-success']) !!}
@endsection
