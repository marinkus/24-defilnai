@extends('home')

@section('title')
Super fun

@endsection
@section('fun')

@if($abc == '22')

<h1>Good {{$abc}}</h1>

@else

<h1>Nelabai {{$abc}}</h1>


@endif


@foreach($arr as $value)
    <h2>{{$value}}</h2>
@endforeach
@endsection