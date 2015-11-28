@extends('whale.template')

@section('title','Index')

@section('content')
    <h1>Alloha!</h1>

    <h6>Choose somebody or add <mark>new</mark></h6>
    <p> New page about food! </p>
    {!! Form::open(['action' => 'Foods@create','method' => 'get'])!!}
    
        {!!Form::submit('Create', ['class' => 'btn btn-primary']) !!}
    
    {!!Form::close()!!} 
    
    </br>

    <table class='table'>
    
    <tr >
        <th> # </th>
        <th> Name </th>
        <th> Edit </th>
        <th> Delete </th>
    </tr>
    
    @foreach($foods as $food)
    <tr> 
        <td> {!! Link_to_action('Foods@show', $food['id'], [$food['id']]) !!} </td>
        <td> {!! $food['name'] !!} </td>
        
        <td> {!! Form::open (['action'=> ['Foods@edit', $food['id']], 'method'=>'get'])!!} {!! Form::submit('Edit') !!} {!! Form::close() !!}</td>
        <td> {!! Form::open (['action'=> ['Foods@destroy', $food['id']]])!!} 
                 {!! Form::button('Delete', ['name'=>'_method', 'type'=>'_hidden', 'value'=>'DELETE']) !!} 
             {!! Form::close() !!} </td>
    </tr>
    @endforeach
    
    </table>
@stop