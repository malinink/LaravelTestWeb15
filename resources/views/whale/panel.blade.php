@extends('whale.template')

@section('title','Index')

@section('content')
    <h1>Alloha!</h1>

    <p>Choose somebody or add <mark>new</mark></p>

    {!! Form::open(['route' => 'whale.create','method' => 'get'])!!}
    
        {!!Form::submit('Create', ['class' => 'btn btn-primary']) !!}
    
    {!!Form::close()!!} 
    
    </br>

    <table class='table'>
    
    <tr >
        <th> # </th>
        <th> Identity </th>
        <th> Firstname </th>
        <th> Lastname </th>
        <th> Sex </th>
        <th> Love fruit </th>
        <th> Hobby </th>
        <th> Edit </th>
        <th> Delete </th>
    </tr>
    
    @foreach($whales as $whale)
    <tr >
        <td> {!! $whale['id'] !!} </td>
        <td> {!! Link_to_route('whale.show', $whale['identity'], [$whale['id']]) !!} </td>
        <td> {!! $whale['firstname'] !!} </td>
        <td> {!! $whale['lastname'] !!} </td>
        <td> {!! $whale['sex'] !!} </td>
        <td> {!! $whale['fruit'] !!} </td>
        <td> {!! $whale['hobby'] !!} </td>
        <td> {!! Form::open (['route'=> ['whale.edit', $whale['id']], 'method'=>'get'])!!} {!! Form::submit('Edit') !!} {!! Form::close() !!}</td>
        <td> {!! Form::open (['route'=> ['whale.destroy', $whale['id']]])!!} 
                 {!! Form::button('Delete', ['name'=>'_method', 'type'=>'_hidden', 'value'=>'DELETE']) !!} 
             {!! Form::close() !!} </td>
    </tr>
    @endforeach
    
    </table>
@stop