@extends('Computers.sample')

@section('body')


<table class='table table-hover table-striped table-condensed'>
    
    <tr>
        <th> id </th>
        <th> Mark </th>
        <th> Model </th>
        <th> Price </th>
        <th> Storage № </th>
        <th> </th>
        <th> </th>
    </tr>

@foreach($comps as $comp)
    <tr>
        <td> {!! link_to_action('ComputersController@show', $comp['id'], [$comp['id']]) !!} </td>
        <td> {!! $comp['mark'] !!} </td>
        <td> {!! $comp['model'] !!} </td>
        <td> {!! $comp['price'] !!} </td>
        <td> {!! $comp['index_of_storage'] !!} </td>
        <td> {!! link_to_action('ComputersController@edit', 'edit', $comp['id'], ['class' => 'btn btn-sm btn-primary']) !!} </td>
        <td> {!! Form::open(['action' => ['ComputersController@destroy', $comp['id']], 'method'=>'DELETE']) !!}
             {!! Form::submit('destroy', ['class' => 'btn btn-sm btn-danger']) !!}
             {!! Form::close() !!} </td>
    </tr>
@endforeach
</table>
{!! link_to_action('ComputersController@create', 'create', [], ['class' => 'btn btn-success', 'style' => 'float:right']) !!}

@endsection