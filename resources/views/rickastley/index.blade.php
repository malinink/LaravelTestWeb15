@extends('rickastley.template')

@section('title','When it was your last when you watch Rick Astley?')

@section('content')
    <div style="float: right">
        {!! link_to_action('RickastleyController@create','Create', [], ['class' => 'btn btn-primary']) !!}
    </div>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Identity</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Rating</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>

        @foreach($rickastley as $rick)
            <tr>
                <th>{{ $rick['id'] }}</th>
                <th>{!! link_to_action('RickastleyController@show', $rick['identity'], ['id' => $rick['id']]) !!}</th>
                <th>{{ $rick['firstname'] }}</th>
                <th>{{ $rick['lastname'] }}</th>
                <th>{{ $rick['rate'] }}</th>

                <th>{!! link_to_action('RickastleyController@edit', 'Edit', ['id' => $rick['id']], ['class' => 'btn btn-default']) !!}</th>
                <th>
                    {!! Form::open(['action' => ['RickastleyController@destroy', $rick['id']], 'method' => 'delete', 'style' => 'display:inline-block']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-default']) !!}
                    {!! Form::close() !!}
                </th>
            </tr>
        @endforeach
    </table>
@endsection