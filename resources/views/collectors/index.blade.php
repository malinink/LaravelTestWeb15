@extends('fruits.layout')

@section('body')
<h1>Collectors!</h1>

@if(count($errors) > 0)
    <div class='alert alert-warning'>
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! link_to_route('collectors.create', 'Create', [], ['class' => 'btn btn-success', 'style' => 'float:right']) !!}
<br>
<br>
<table class = 'table'>
    
    <tr>
        <th> #  </th>
        <th> Name </th>
        <th>  </th>
        <th>  </th>
    </tr>
    
@foreach($collectors as $collector)
<tr>
    <td> {!! $collector['id'] !!} </td>
    <td> {!! link_to_route('collectors.show', $collector['name'], [$collector['id']]) !!} </td>
    <td> {!! link_to_route('collectors.edit', 'edit', [$collector['id']], ['class' => 'btn btn-default btn-sm']) !!} </td>
    <td> {!! Form::open(['route' => ['collectors.destroy', $collector['id']], 'method'=>'DELETE']) !!}
         {!! Form::submit('destroy', ['class' => 'btn btn-default btn-sm']) !!}
         {!! Form::close() !!} </td>
</tr>
@endforeach
</table>

@endsection