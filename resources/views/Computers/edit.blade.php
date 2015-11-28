@extends('Computers.sample_create_edit')

@section('for_open_form')
    {!! Form::model($comp, ['action' => ['ComputersController@update', $comp['id']], 'method' => 'POST']) !!}
@endsection

@section('for_button')
    {!! Form::submit('Update', ['class' => 'btn btn-success']) !!} 
@endsection
