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
                            <div class="swiper">

                                <div class="swiper-wrapper">
                                    @forelse($movie->getPhotos as $photo)
                                    <div class="swiper-slide">

                                        <img src="{{$photo->url}}">

                                    </div>
                                    @empty
                                    <h2>No photos yet.</h2>
                                    @endforelse
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
