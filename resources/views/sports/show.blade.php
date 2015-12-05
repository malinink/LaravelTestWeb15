
@extends('sports.layouts')
@section('title','Show')
@section ('content')

<h1>SHOW</h1>
<table class='table'>
    
    <tr>
        <td>{!! $sport['id'] !!}</td>
        <td>{!! $sport['identity'] !!}</td>
        <td>{!! $sport['name'] !!}</td>
        <td>{!! $sport['count'] !!}</td>
    </tr>
</table>
{!! link_to_action('Sports@index', 'Back to index', [], 
    ['class' => 'btn btn-success']) !!}
@endsection
