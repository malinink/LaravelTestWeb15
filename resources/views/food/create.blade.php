@extends('whale.template')

@section('title','Create')

@section('content')
    <h1> Add new position </h1>

    @if ($errors->any)
        <ul class='alert-warning'>
            @foreach ($errors->all() as $error)
            <li> {!! $error !!}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::open(['action' => 'Foods@store' ]) !!}
    
    <div>
        {!! Form::label('Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    
    </br>
        
        {!! Form::submit('Create', ['class' => 'btn btn-primary' ]) !!}    
       
    {!! Form::close() !!}
@stop