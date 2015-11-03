@extends('fruits.layout')

@section('body')
<h1> Fruits </h1>

{!! link_to_action('Fruits@create', 'create', [], ['class' => 'btn btn-success', 'style' => 'float:right']) !!}
<br>
<br>
<table class = 'table'>
    
    <tr>
        <th> #  </th>
        <th> Identity </th>
        <th> Name </th>
        <th> Color </th>
        <th> Weight </th>
        <th> Control </th>
        <th>  </th>
    </tr>
    
@if (session('message'))
    <div class='alert alert-info'>
    {{ session('message') }}
    </div>
@endif

@foreach($fruits as $fruit)
<tr>
    <td> {!! $fruit['id'] !!} </td>
    <td> {!! link_to_action('Fruits@show', $fruit['identity'], [$fruit['id']]) !!} </td>
    <td> {!! $fruit['name'] !!} </td>
    <td> {!! $fruit['color'] !!} </td>
    <td> {!! $fruit['weight'] !!} </td>
    <td> {!! link_to_action('Fruits@edit', 'edit', [$fruit['id']], ['class' => 'btn btn-default btn-sm']) !!} </td>
    <td> {!! Form::open(['action' => ['Fruits@destroy', $fruit['id']], 'method'=>'DELETE']) !!}
         {!! Form::submit('destroy', ['class' => 'btn btn-default btn-sm']) !!}
         {!! Form::close() !!} </td>
</tr>
@endforeach
</table>

@endsection