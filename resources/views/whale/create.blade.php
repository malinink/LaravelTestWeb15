@extends('whale.template')

@section('title','Create')

@section('content')
    <h1> Add new inhabitant </h1>

    {!! Form::open(['route' => 'whale.store']) !!}
    
    <div>
        {!! Form::label('Identity') !!}
        {!! Form::text('identity', null, ['class' => 'form-control']) !!}
    </div>
    
    <div>
        {!! Form::label('Firstname') !!}
        {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
    </div>
    
    <div>
        {!! Form::label('Lastname') !!}
        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
    </div>
    
    <div>
        {!! Form::label('Sex') !!}
        {!! Form::select('sex', ['Male' => 'male', 'Female' => 'female'], null, ['class' => 'form-control']) !!}
    </div>
     
    <div>
        {!! Form::label('Love fruit') !!}
        {!! Form::text('fruit', null, ['class' => 'form-control']) !!}
    </div>
    
    <div>
        {!! Form::label('Hobby') !!}
        {!! Form::text('hobby', null, ['class' => 'form-control']) !!}
    </div>
    
    </br>
        
        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}    
       
    {!! Form::close() !!}
@stop