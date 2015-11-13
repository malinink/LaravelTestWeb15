@extends('Computers.sample_create_edit')

@section('for_open_form')
    {!! Form::open(['action' => 'ComputersController@store', 'method' => 'POST']) !!}
@endsection

@section('for_button')
    {!! Form::submit('Create', ['class' => 'btn btn-success', 'style' => 'float:left']) !!} 
@endsection
