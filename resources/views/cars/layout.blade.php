<html>
    <head>
        <title>@yield('title')</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        @section('content')
        {!! link_to_action('CarsController@index', 'Back to starting page', [], ['class' => 'btn btn-success', 'style' => 'display:inline-block']) !!}
        @show
    </body>
</html>