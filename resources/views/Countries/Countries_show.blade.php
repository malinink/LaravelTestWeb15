@extends('layouts.master')

@section('title', 'Show')

@section('content')
<h1> Information</h1> 
<h2>Id: {!! $country['id'] !!}</h2>
<h2>Identity: {!! $country['identity'] !!}</h2>
<h2>Name of the country: {!! $country['name'] !!}</h2>
<h2>Name in Anime: {!! $country['nameanime'] !!}</h2>
<h2>Language: {!! $country['language'] !!}</h2>
<h2>Area: {!! $country['area'] !!}</h2>
<br>
<br>
{!! link_to_action('CountriesController@index', 'Back',0, ['class' => 'btn btn-default btn-sm']) !!}
@stop
