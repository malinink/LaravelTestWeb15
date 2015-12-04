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
    
    {!! Form::model($whale, ['route' => ['whale.update', $whale['id']], 'method'=>'put'])!!}

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
        {!! Form::select('sex', ['Male' => 'male', 'Female' => 'female'], null, ['class' => 'form-control'])!!}
    </div>
    
    <div>
        {!! Form::label('Love fruit') !!}
        {!! Form::text('fruit', null, ['class' => 'form-control']) !!}
    </div>
    
    <div>
        {!! Form::label('Hobby') !!}
        {!! Form::text('hobby', null, ['class' => 'form-control']) !!}
    </div>
    
    <div>
        {!! Form::label('food_list', 'Food:') !!}
        {!! Form::select('food_list[]', $foods, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
    </div>
    
    </br>
    
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}    
    {!! Form::close() !!}
@stop