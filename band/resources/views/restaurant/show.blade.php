@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
                    <div class="card-header">
                        <h2>Restaurant: {{$restaurant->title}}</h2>
                        <h3>Address: {{ $restaurant->address }}, {{ $restaurant->city }}</h3>
                    </div>
                    <div class="card-body col-6">
                        <p class="title">MENU</p>
                        <ul class="list-group">
                            @forelse($restaurant->getDishes as $dish)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <p class="description">{{ $dish->title }} {{ $dish->price }}</p>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">Menu is empty</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
                <form action="{{ route('restaurant_delete', $restaurant) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger">Bankrupt</button>
                </form>
    </div>
@endsection
