@extends('layouts.master')

@section('title', 'Update')

@section('content')
    
    <p>  France - Update countries!</p>
    {!!Form::open(['route'=> 'countries.index','method'=>'GET'])!!}
    {!!Form::submit('Back')!!}
    {!!Form::close()!!}
@stop
