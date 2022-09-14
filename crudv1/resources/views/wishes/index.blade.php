@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('create')}}" class="btn btn-primary">Make a wish...</a>
        <div class="row">
            @foreach($wishes as $wish)
            <div class="col-4">
                <a href="{{route('edit', $wish)}}">{{$wish->title}}</a>
                <p>{{$wish->description}}</p>
                <p>{{$wish->name}} {{$wish->class}}</p>
                <a href="{{$wish->link}}">Link to my dream</a>
            </div>
            @endforeach
        </div>
    </div>
@endsection('content')
