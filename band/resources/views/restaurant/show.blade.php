@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Restaurant: {{ $restaurant->title }}</h2>
                <h3>Address: {{ $restaurant->address }}, {{ $restaurant->city }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <h3 class="title">MENU</h3>
                <a class="dish-link" href="{{ route('dish_create', ['id' => $restaurant->id]) }}">Add new shedevre to menu</a>

            </div>
        </div>
        <div class="row">
            @forelse($restaurant->getDishes as $dish)
                <div class="col-3 border">
                    @if ($dish->image)
                        <img src="{{ $dish->image }}" alt="">
                    @else
                        <h4 class="img-place">No image</h4>
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
                <p class="title">Menu is empty
                <p>
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
