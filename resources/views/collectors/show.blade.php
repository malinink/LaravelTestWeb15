@extends('fruits.layout')

@section('body')
<h1>Collectors show~</h1>
<h1>{!! $collector['id'] !!}</h1>

<h1>{!! $collector['name'] !!}</h1>

{!! link_to_route('collectors.index', 'Back to collectors', [], ['class' => 'btn btn-success']) !!}
@endsection
