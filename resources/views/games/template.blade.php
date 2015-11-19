<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WIKI: games</title>
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container"> 
            <a class="navbar-brand"> WIKI: games </a>
        </div>
    </div>

    <hr>
    <div class="jumbotron">

        <div class="container">

            @if (Session::has('flash message'))
            <div class='alert alert-success'>
                {{Session::get('flash message')}}
            </div>
            @endif

            @yield("content")
            <hr>
        </div>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</body>
</html>
