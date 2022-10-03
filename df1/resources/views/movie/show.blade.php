@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>movie</h2>
                    </div>
                    <div class="card-body">
                        <div class="movie-show">
                            <h4 class="title"><span class="small-text">Title: </span>{{ $movie->title }}</h4>
                            <h5 class="plate"><span class="small-text">Price: </span>{{ $movie->price }} EUR</h5>
                            <h5 class="plate"><span class="small-text">Category: </span>{{ $movie->getCategory->title }} EUR</h5>
                            @if ($movie->photo)
                            <div class="image">
                                <img src="{{$movie->photo}}" alt="photo">
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
