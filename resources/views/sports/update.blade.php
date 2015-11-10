
@extends('sports.layouts')
@section('title','Update')
@section('content')

<h1>UPDATE</h1>
{!! Form::open(['route' => 'sports.index','method' => 'get'])!!}
{!!Form::submit('Back', ['class' => 'btn btn-warning']) !!}
{!!Form::close()!!}
@endsection