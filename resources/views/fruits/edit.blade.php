@extends('fruits.layout')

@section('body')
<h1>Fruits Edit.</h1>

{!! Form::model($fruit, ['action' => ['Fruits@update', $fruit['id']], 'method' => 'PUT']) !!}

{!! Form::label('Identity') !!}
{!! Form::text('identity', null, ['class' => 'form-control']) !!}

{!! Form::label('Name') !!}
{!! Form::select('name', ['Apple' => 'Apple', 'Kiwi' => 'Kiwi'], null, ['class' => 'form-control']) !!}

{!! Form::label('Color') !!}
{!! Form::text('color', null, ['class' => 'form-control']) !!}

{!! Form::label('Weight') !!}
{!! Form::text('weight', null, ['class' => 'form-control']) !!}

<br>
{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection
