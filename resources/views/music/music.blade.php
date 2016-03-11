<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Music</title>
 </head>
     <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

 <body>
     <h1>Music index page</h1>
  
          
        
        <!-- create -->
        {!!Form::open(['route' => 'music.create','method'=>'get'])!!}
            {!!Form::submit('create',array('class' => 'btn btn-default','style' => 'float:left'))!!}
        {!!Form::close()!!}
        <!-- store -->
        {!!Form::open(['route' => 'music.store','method'=>'post'])!!}
            {!!Form::submit('store',array('class' => 'btn btn-default','style' => 'float:left'))!!}
        {!!Form::close()!!}
        <!-- show -->
        {!!Form::open(['route' => array('music.show',$id),'method'=>'get'])!!}
            {!!Form::submit('show',array('class' => 'btn btn-default','style' => 'float:left'))!!}
        {!!Form::close()!!}
        <!-- edit -->
        {!!Form::open(['route' => array('music.edit',$id),'method'=>'get'])!!}
            {!!Form::submit('edit',array('class' => 'btn btn-default','style' => 'float:left'))!!}
        {!!Form::close()!!}
        <!-- update -->
        {!!Form::open(['route' => array('music.update',$id),'method'=>'put'])!!}
            {!!Form::submit('update',array('class' => 'btn btn-default','style' => 'float:left'))!!}
        {!!Form::close()!!}
        <!-- destroy -->
        {!!Form::open(['route' => array('music.destroy',$id),'method'=>'delete'])!!}
            {!!Form::submit('destroy',array('class' => 'btn btn-default','style' => 'float:left'))!!}
        {!!Form::close()!!}
        
  
 </body>
</html>
