@extends('sports.layouts')
@section('title','Create')
@section('content')

<h1>CREATE</h1>
{!! Form::open(['route' => 'sports.index','method' => 'get'])!!}
{!!Form::submit('Back', ['class' => 'btn btn-default ']) !!}
{!!Form::close()!!}
@endsection
