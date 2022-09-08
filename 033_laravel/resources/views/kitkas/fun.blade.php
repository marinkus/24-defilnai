@extends('home')

@section('title')
Super fun

@endsection
@section('fun')

@include('kitkas.bl')

@if($abc == '22')

<h1>Good {{$abc}}</h1>

@else

<h1>Nelabai {{$abc}}</h1>


@endif


@forelse($arr as $value)
    
<h2>{{$value}}</h2>
@empty
<h2>Tuscias</h2>
    
@endforelse($arr as $value)
@endsection
