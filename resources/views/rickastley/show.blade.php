@extends('rickastley.template')

@section('title','I\'m Redhead, and you?')

<style type="text/css">
    p {
        font-size: 1.5em;
    }
</style>

@section('content')
    <p>{{ $rick['id'] }}</p>
    <p>{{ $rick['identity']}}</p>
    <p>{{ $rick['firstname'] }}</p>
    <p>{{ $rick['lastname'] }}</p>
    <p>{{ $rick['rate'] }}</p>

    @parent
@endsection