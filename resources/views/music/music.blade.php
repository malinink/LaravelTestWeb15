<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Music</title>
 </head>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <body>
     <h1>Music index page</h1>
        
        <table class="table">
  <tr>
      <th>id</th>
    <th>singername</th>
    <th>style</th>
    <th></th>
    <th></th>
  </tr>
  @foreach ($music as $m)
  <tr>
      <th><a href="{{action('MusicController@show',[$m->id])}}">{{$m->id}}</a></th>
    <th>{{$m->singername}}</th>
    <th>{{$m->style}}</th>
    <th>{!!Form::open(['route' => array('music.edit',$m->id),'method'=>'get'])!!}
            {!!Form::submit('edit',array('class' => 'btn btn-success','style' => 'float:left'))!!}
        {!!Form::close()!!}  </th>
    <th>{!!Form::open(['route' => array('music.destroy',$m->id),'method'=>'delete'])!!}
            {!!Form::submit('destroy',array('class' => 'btn btn-default','style' => 'float:left'))!!}
        {!!Form::close()!!} </th>
  </tr>
  @endforeach

</table>
        
{!! Form::open(['url'=>'/music/create','method'=>'get']) !!}
  <div class="form-group">
    {!!Form::submit('create new',array('class' => 'btn btn-primary','style' => 'float:left'))!!}
</div>
  {!! Form::close() !!}    
        
  
 </body>
</html>
