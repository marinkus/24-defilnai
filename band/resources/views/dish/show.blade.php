@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $dish->title }}</h2>
                    </div>
                    <div class="card-body">
                        @if ($dish->image)
                        <img src="{{$dish->image}}" alt="photo">
                        @endif
                        <h3>Price: {{ $dish->price }} Eur</h3>
                        <h4>You can taste it: <a href="{{route('restaurant_show', $dish->getRestaurant->id)}}">{{ $dish->getRestaurant->title}}</a> at <span>{{ $dish->getRestaurant->address}}, {{ $dish->getRestaurant->city }}</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
