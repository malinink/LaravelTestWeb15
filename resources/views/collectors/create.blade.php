@extends('fruits.layout')

@section('body')
<h1>Collector Create!</h1>

@if(count($errors) > 0)
    <div class='alert alert-warning'>
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::open(['action' => 'Collectors@store', 'method' => 'POST']) !!}

{!! Form::label('Name') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

<br>
{!! Form::submit('Create', ['class' => 'btn btn-success']) !!}

{!! Form::close() !!}
@endsection
    
