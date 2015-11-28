<html>
    <head>
        <title> LaravelTestWeb15: Country - @yield('title')</title>
    </head>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <body>
        <div class='container'>
        @if (Session::has('flash_message'))
        <div class="alert alert-info">{{ Session::get('flash_message') }}</div>
        @endif
         @section('content')   
        @show
        </div>

    </body>
</html>

