@extends('sports.layouts')
@section('title','Index')
@section('content')

{!! Form::open(['route' => 'sports.create','method' => 'get','style'=>'display:inline'])!!}
{!!Form::submit('Create', ['class' => 'btn btn-default']) !!}
{!!Form::close()!!}

{!! Form::open(['route' => 'sports.store','method' => 'post','style'=>'display:inline'])!!}
{!!Form::submit('Store', ['class' => 'btn btn-success']) !!}
{!!Form::close()!!}

{!! Form::open(['route' => ['sports.show','id' => 1],'method' => 'get','style'=>'display:inline'])!!}
{!!Form::submit('Show', ['class' => 'btn btn-info']) !!}
{!!Form::close()!!}

{!! Form::open(['route' => ['sports.edit', 'id' => 1], 'method' => 'get','style'=>'display:inline'])!!}
{!!Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
{!!Form::close()!!}

{!! Form::open(['route' => ['sports.update', 'id' => 1], 'method' => 'put','style'=>'display:inline'])!!}
{!!Form::submit('Update', ['class' => 'btn btn-warning']) !!}
{!!Form::close()!!}

{!! Form::open(['route' => ['sports.destroy', 'id' => 1], 'method' => 'delete','style'=>'display:inline'])!!}
{!!Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
{!!Form::close()!!}

@endsection