@extends('layouts.master')

@section('title', 'Store')

@section('content')
    
    <p>  China - Store countries!</p>
    {!!Form::open(['route' => 'countries.index','method'=>'GET'])!!}
    {!!Form::submit('Back')!!}
    {!!Form::close()!!}
@stop
