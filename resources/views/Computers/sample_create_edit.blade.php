@extends('Computers.sample')

@section('body')
    @section('for_open_form')
    @show
    
    {!! Form::label('Mark') !!}
    {!! Form::text('mark', null, ['class' => 'form-control']) !!}

    {!! Form::label('Model') !!}
    {!! Form::text('model', null, ['class' => 'form-control']) !!}

    {!! Form::label('Price') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}

    {!! Form::label('Storage №') !!}
    {!! Form::text('index_of_storage', null, ['class' => 'form-control']) !!}

    <br>
    {!! link_to_action('ComputersController@index', 'Back', [],['class' => 'btn btn-default', 'style' => 'float:right']) !!}
    @section('for_button')
    @show
    
    {!! Form::close() !!}
@endsection