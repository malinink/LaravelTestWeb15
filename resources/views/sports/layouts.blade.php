<html>
    <head>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <title>Sport - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
        <p align="center">SPORTS</p>
        @show

        <div class="Sports">
            @yield('content')
        </div>
    </body>
</html>
