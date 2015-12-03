@extends('whale.template')

@section('title','Some page')

@section ('content')

    <h1>Food show</h1>

    <p> {!! $object['id'] !!}</p>

    <p> {!! $object['name'] !!}</p>


    {!! HTML::link('food','Back to food', ['class'=>'btn btn-primary']) !!}

@stop