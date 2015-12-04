@extends('whale.template')

@section('title','Some page')

@section ('content')

    <h1>Whale show</h1>

    <p> {!! $object['id'] !!}</p>

    <p> {!! $object['identity'] !!}</p>

    <p> {!! $object['firstname'] !!}</p>

    <p> {!! $object['lastname'] !!}</>

    <p> {!! $object['sex'] !!}</p>
    
    <p> {!! $object['fruit'] !!}</p>
    
    <p> {!! $object['hobby'] !!}</p>
     
    @unless ($object['foods']->isEmpty())
        <h2> Food: </h2>
        <ul> @foreach($object['foods'] as $food)
            <li> {!! $food->name !!} </li>
            @endforeach 
        </ul>
    @endunless

    {!! HTML::link('whale','Back to whales', ['class'=>'btn btn-primary']) !!}

@stop