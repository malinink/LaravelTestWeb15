@extends('sports.layouts')
@section('title','Store')
@section('content')

<h1>STORE</h1>
{!! Form::open(['route' => 'sports.index','method' => 'get'])!!}
{!!Form::submit('Back', ['class' => 'btn btn-success']) !!}
{!!Form::close()!!}
@endsection
