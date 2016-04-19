@extends("games.template")

@section("content")

    <h1>Add new game</h1>

    {!! Form::open(['route' => 'games']) !!}
     
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:') !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Genre') !!}
        {!! Form::select('genre', ['RPG' => 'RPG', 'Shooter' => 'Shooter', 'Puzzle' => 'Puzzle'], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('published', 'Published:') !!}
        {!! Form::text('published', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Save', ["class"=>"btn btn-success"]) !!}
    {!! HTML::linkAction('GamesController@index', 'Back', array(), array('class' => 'btn btn-default')) !!}

    {!! Form::close() !!}

    <hr>

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                  <li> {{$error}} </li>
            @endforeach
        </ul>
    @endif

@stop
