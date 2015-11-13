@extends('sports.layouts')
@section('title','Index')
@section('content')

<h1>Sports</h1>
<table class='table'>
    <tr>
        <th>#</th>
        <th>Identity</th>
        <th>Name</th>
        <th>Count</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($sports as $sport)
    <tr>
        <td>{!! $sport['id'] !!}</td>
        <td>{!! link_to_action('Sports@show', $sport['identity'], $sport['id']) !!}</td>
        <td>{!! $sport['name'] !!}</td>
        <td>{!! $sport['count'] !!}</td>
        <td>{!! link_to_action('Sports@edit', 'Edit', $sport['id'], 
            ['class' => 'btn btn-warning']) !!}</td>
        <td>{!! Form::open(['action' => ['Sports@destroy', $sport['id']], 
            'method' => 'delete']) !!}
            {!! Form::submit('Destroy', ['class' => 'btn btn-info']) !!}
            {!! Form::close() !!}</td>
    </tr>
    @endforeach
</table>
{!! link_to_action('Sports@create', 'Create', [], 
    ['class' => 'btn btn-success']) !!}
@endsection