@extends("games.template")

@section("content")

    <h1>WIKI: games</h1>

    <hr>

    <div class='container' align='center'>
        {!! HTML::linkAction('GamesController@create', 
            'Add new', [], 
            ['class' => 'btn btn-lg btn-primary ']) !!}
    </div>
<!--
    {!! Form::open(array('route' => 'games', 'style'=>'display:inline')) !!}
        {!! Form::submit('Store', array("class"=>"btn btn-default")) !!}
    {!! Form::close() !!}

    {!! HTML::linkAction('GamesController@show', 'Show', array('id' => 1), array('class' => 'btn btn-default')) !!}

    {!! Form::open(array("route" => array("games.destroy", "id" => 1),'style'=>'display:inline')) !!}
        <button type="submit" class="btn btn-default">Update</button>
    {!! Form::close() !!}
-->
    <hr>

    <div class = 'container'>
            <table class='table table-bordered table-striped'>
                <caption>Available games</caption>
                <tbody>

                    <tr>
                        <th width = 150>Title</th>
                        <th>Description</th>
                        <th width = 1>Edit</th>
                        <th width = 1>Delete</th>
                    </tr>

                     @foreach ($games as $game)
                        <tr>
                            <td>
                               <!-- {{$game->title}} -->

                                {!! HTML::linkAction('GamesController@show', 
                                    $game->title, ['id' => $game->id] )
                                !!}
                                
                            </td>
                            <td>{{$game->description}}</td>
                            <td>
                                {!! HTML::linkAction('GamesController@edit', 
                                '...', ['id' => $game->id], ['class' => 'btn btn-default']) !!}
                            </td>
                            <td>
                                {!! Form::open(array("route" => array("games.destroy", "id" => $game->id), "method" => "delete", 'style'=>'display:inline')) !!}
                                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-trash"></i></button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>   
        </div>
@stop
