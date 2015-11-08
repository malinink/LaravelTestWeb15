@extends("games.template")

@section("content")

    <h1>Edit game: {{ $game->title }}</h1>

    {!! Form::model($game, ['route' => ['games.update', 'id'=>$game->id]]) !!}
     
    <div class="form-group">
         {!! Form::label('title', 'Title:') !!}
         {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
         {!! Form::label('description', 'Description:') !!}
         {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Update', ["class"=>"btn btn-success"]) !!}
    {!! HTML::linkAction('GamesController@index', 'Back', [], ['class' => 'btn btn-default']) !!}

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
