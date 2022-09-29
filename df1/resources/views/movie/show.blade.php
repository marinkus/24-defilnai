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
                            <h3 class="title"><span class="small-text">Model: </span>{{ $movie->maker }} {{ $movie->make_year }}</h3>
                            <h2 class="plate"><span class="small-text">License plate: </span>{{ $movie->plate }}</h2>
                            @if ($movie->photo)
                            <div class="image">
                                <img src="{{$movie->photo}}" alt="photo">
                            </div>
                            @endif
                            <p class="description">{{ $movie->mechanic_notices }}</p>
                            <h5 class="title"><span class="small-text">Mechanic: </span>{{ $movie->getMechanic->name }} {{ $movie->getMechanic->surname }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
