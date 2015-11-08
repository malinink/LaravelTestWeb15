@extends('layouts.master')

@section('title', 'Destroy')

@section('content')
    
    <p>  Vikings - Destroy countries!</p>
        
    {!!Form::open(['route' => 'countries.index','method' => 'GET'])!!}
    {!!Form::submit('Back')!!}
    {!!Form::close()!!}
    
@stop
