@extends ('layoutmusic')
@section('content')
edit
<hr>
{!! Form::model($music,['method'=>'PATCH','action'=>['MusicController@update',$music->id]]) !!}
<!--singername-->
<div class="form-group">
{!! Form::label('singername','Singername:') !!}
{!! Form::text('singername',null,['class'=>'form-control']) !!}
</div>
<!--style-->
<div class="form-group">
{!! Form::label('style','Style:') !!}
{!! Form::text('style',null,['class'=>'form-control']) !!}
</div>
<!--descr-->
<div class="form-group">
{!! Form::label('instrument','instrument:') !!}
{!! Form::text('instrument',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::submit('create',array('class' => 'btn btn-primary','style' => 'float:left'))!!}
</div>
{!! Form::close() !!}
@stop