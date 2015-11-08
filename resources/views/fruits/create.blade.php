@extends('fruits.layout')

@section('body')
<h1>Fruits Create!</h1>

{!! Form::open(['action' => 'Fruits@store', 'method' => 'POST']) !!}

{!! Form::label('Identity') !!}
{!! Form::text('identity', null, ['class' => 'form-control']) !!}

{!! Form::label('Name') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

{!! Form::label('Color') !!}
{!! Form::text('color', null, ['class' => 'form-control']) !!}

{!! Form::label('Weight') !!}
{!! Form::text('weight', null, ['class' => 'form-control']) !!}

{!! Form::label('Price') !!}
{!! Form::text('price', null, ['class' => 'form-control']) !!}

{!! Form::label('Condition') !!}
{!! Form::select('condition', ['Fresh' => 'Fresh', 'Rotten' => 'Rotten'], null, ['class' => 'form-control']) !!}

<br>
{!! Form::submit('Create', ['class' => 'btn btn-success']) !!}

{!! Form::close() !!}
@endsection
    
