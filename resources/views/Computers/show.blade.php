@extends('Computers.sample')

@section('body')
<p> <b>id</b>: {!! $comp['id'] !!} </p>
<p> <b>Mark</b>: {!! $comp['mark'] !!} </p>
<p> <b>Model</b>: {!! $comp['model'] !!} </p>
<p> <b>Price</b>: {!! $comp['price'] !!} </p>
<p> <b>Storage №</b>{!! $comp['index_of_storage'] !!} </p>

{!! link_to_action('ComputersController@index', 'Back', [], ['class' => 'btn btn-default']) !!}

@endsection
