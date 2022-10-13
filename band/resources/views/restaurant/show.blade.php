@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
                <h2>Restaurant: {{ $restaurant->title }}</h2>
                <h3>Address: {{ $restaurant->address }}, {{ $restaurant->city }}</h3>
            </div>
        <div class="row">
            <a href="{{ route('dish_create', $dish) }}">add dish</a>
                <h3 class="title">MENU</h3>

                @forelse($restaurant->getDishes as $dish)
                    <div class="col-3 border">
                        @if($dish->image)
                        <img src="{{ $dish->image }}" alt="">
                        @else
                        <h4>No image</h4>
                        @endif
                        <h3 class="title">{{ $dish->title }}</h3>
                        <p class="description">Price: {{ $dish->price }}</p>
                        <form action="{{ route('restaurant_rate', $dish) }}" method="post">
                            @method('put')
                            @csrf
                            <h5>Rating: {{ $dish->rating ?? 'No raiting' }}</h5>
                            <select name="rate">
                                @foreach (range(1, 10) as $option)
                                    <option value="{{ $option }}">{{ $option }}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-info">Rate</button>
                        </form>
                    </div>
                @empty
                    <p class="title">Menu is empty<p>
                @endforelse
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('restaurant_delete', $restaurant) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Bankrupt</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
