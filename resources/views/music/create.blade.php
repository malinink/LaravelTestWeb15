@extends('layoutmusic')
@section('content')
create

<hr>
{!! Form::open(['url'=>'/music']) !!}
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
<div class="form-group">
    {!!Form::submit('create',array('class' => 'btn btn-primary','style' => 'float:left'))!!}
</div>
{!! Form::close() !!}


@stop