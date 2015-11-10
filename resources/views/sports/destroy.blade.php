@extends('sports.layouts')
@section('title','Destroy')
@section('content')

<h1>DESTROY</h1>
{!! Form::open(['route' => 'sports.index','method' => 'get'])!!}
{!!Form::submit('Back', ['class' => 'btn btn-danger']) !!}
{!!Form::close()!!}
@endsection