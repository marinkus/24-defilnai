@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h2>List of restaurants</h2>
                        <ul class="list-group">
                            @forelse($restaurants as $restaurant)
                                <li class="line-content">
                                        <div class="container">
                                            <p class="title">{{ $restaurant->title }}</p>
                                            <p class="description">Address: {{ $restaurant->address }}, City: {{ $restaurant->city }}</p>
                                        </div>
                                        <div class="container buttons">
                                            <a href="{{ route('restaurant_show', $restaurant) }}" type="button" class="btn btn-info">Show restaurant</a>
                                            @if(Auth::user()->role >=10)
                                            <a href="{{ route('restaurant_edit', $restaurant)}}" type="button" class="btn btn-warning">Edit</a>
                                            @endif
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No restaurants found</li>
                            @endforelse
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
