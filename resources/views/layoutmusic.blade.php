<!DOCTYPE html>
<html>
    <head>
        <title>Music</title>

        <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" >

        
    </head>
    <body>
        <div class="container">
            <h1> Music 
        @yield('content')
        </h1>
            <!-- back -->
        {!!Form::open(['route' => 'music.music','method'=>'get'])!!}
            {!!Form::submit('back to music',array('class' => 'btn btn-default','style' => 'float:left'))!!}
        {!!Form::close()!!}
        </div>
    </body>
</html>

