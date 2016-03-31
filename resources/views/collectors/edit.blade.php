@extends('fruits.layout')

@section('body')
<h1>Collector Edit.</h1>

@if(count($errors) > 0)
    <div class='alert alert-warning'>
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
    @endforeach
    </div>
@endif

{!! Form::model($collector, ['route' => ['collectors.update', $collector['id']], 'method' => 'PUT']) !!}

{!! Form::label('Name') !!}
{!! Form::text('name', null, ['class' => 'form-control']) !!}

{!! Form::label('status') !!}
{!! Form::select('active', ['1' => 'active', '0' => 'inactive'], null,  ['class' => 'form-control']) !!}

<br>
{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@endsection
