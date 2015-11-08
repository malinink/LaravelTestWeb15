<!DOCTYPE html>
<html>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<head>
    <title>Never gonna give you up</title>
</head>
<body>
<style type="text/css">
    .container {
        padding: 30px;
        float: left;
    }
</style>
<div class='container'>
    @section('headerToolBar')
        {{-- there will be some toolbar --}}
    @show
    <h2>@yield('title')</h2>
    <hr>
    @section('content')
        {!! link_to_action('RickastleyController@index', 'Back', [], ['class' => 'btn btn-default']) !!}
    @show


</div>
</body>
</html>

