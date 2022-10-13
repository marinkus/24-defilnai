@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">

            <div class="col-8">
                <form action="{{ route('home') }}" method="get">
                    <div class="col-5">
                        <select name="sort" class="form-select mt-1">
                            <option value="0">All</option>
                            @foreach ($sortSelect as $option)
                                <option value="{{ $option[0] }}" @if ($sort == $option[0]) selected @endif>
                                    {{ $option[1] }}
                                </option>
                            @endforeach
                        </select>
                        <button type="submit" class="input-group-text mt-1">Sort</button>
                    </div>

                </form>
                <h2>Choose your restaurant:</h2>
                <ul class="list-group">
                    @foreach ($restaurants as $restaurant)
                        <li class="line-content"><a href="{{ route('restaurant_show', $restaurant) }}">{{ $restaurant->title }}</a><span>{{ $restaurant->city }}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    </div>
@endsection
