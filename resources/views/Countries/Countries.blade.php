@extends('layouts.master')

@section('title', 'Main')

@section('content')
    
<h2> Let's discover something new about countries!</h2>
    
<br>
<br>
{!! link_to_action('CountriesController@create', 'Create', [], ['class' => 'btn btn-default', 'style' => 'float:left']) !!}
<br>
<br>
<br>
<br>

<table class = 'table'>  
   <tr>
        <th> Number </th>
        <th> Id </th>
        <th> Name of Country </th>
        <th> Name in Anime </th>
        <th> Language </th>
        <th> Area </th>
        <th>  </th>
    </tr>

@foreach($countries as $country)
<tr>
    <td> {!! $country['identity'] !!} </td>
    <td> {!! link_to_action('CountriesController@show', $country['identity'], [$country['id']]) !!} </td>
    <td> {!! $country['name'] !!} </td>
    <td> {!! $country['nameanime'] !!} </td>
    <td> {!! $country['language'] !!} </td>
    <td> {!! $country['area'] !!} </td>
    <td> {!! link_to_action('CountriesController@edit', 'Edit', [$country['id']], ['class' => 'btn btn-default btn-sm']) !!} </td>
    <td> {!! Form::open(['action' => ['CountriesController@destroy', $country['id']], 'method'=>'DELETE']) !!}
         {!! Form::submit('Delete', ['class' => 'btn btn-default btn-sm']) !!}
         {!! Form::close() !!} </td>
</tr>
@endforeach
</table>
    
@stop


