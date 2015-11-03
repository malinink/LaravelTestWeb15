@extends('fruits.layout')

@section('body')
<h1>Fruits show~</h1>
<h1>{!! $fruit['id'] !!}</h1>
<h1>{!! $fruit['identity'] !!}</h1>
<h1>{!! $fruit['name'] !!}</h1>
<h1>{!! $fruit['color'] !!}</h1>
<h1>{!! $fruit['weight'] !!}</h1>
{!! link_to_action('Fruits@index', 'Back to fruits', [], ['class' => 'btn btn-success']) !!}
@endsection
