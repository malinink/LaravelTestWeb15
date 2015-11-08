@extends('rickastley.template')

@section('title','Make it, i\'m waiting')

@section('content')
    {!! Form::open(['action' => 'RickastleyController@store', 'method' => 'post']) !!}
    <div class="form-group">
        {!! Form::label('Identity:') !!}
        {!! Form::text('identity', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('First name:') !!}
        {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Last name:') !!}
        {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Rate me:') !!}
        {!! Form::select('rate', ['Good Enough' => 'Good Enough',
                                  'Where am i?' => 'Where am i?',
                                  'Who is this man?' => 'Who is this man?',
                                  'Rick Astley' => 'Rick Astley',
                                  'Never gone give you up' => 'Never gone give you up'
        ], null, ['class' => 'form-control']) !!}
    </div>
    {!! Form::submit('Create', ['class' => 'btn btn-default']) !!}
    @parent
    {!! Form::close() !!}

@endsection