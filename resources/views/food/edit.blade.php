@extends('whale.template')

@section('title','Edit')

@section('content')
    <h1>Edit</h1>
    
    @if ($errors->any)
        <ul class='alert-warning'>
            @foreach ($errors->all() as $error)
            <li> {!! $error !!}</li>
            @endforeach
        </ul>
    @endif
    
    {!! Form::model($food, ['action' => ['Foods@update', $food['id']], 'method'=>'put'])!!}

    <div>
        {!! Form::label('Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    
    
    </br>
    
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}    
    {!! Form::close() !!}
@stop