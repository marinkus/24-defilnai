@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h2>All dishes list:</h2>
                        <ul class="list-group">
                            @forelse($dishes as $dish)
                                <li class="line-content m-2">
                                    <div class="container">
                                        <h3 class="title">{{ $dish->title }}</h3 class="title">
                                        <p class="description"></p>
                                    </div>
                                    <div class="buttons">
                                        <a href="{{ route('dish_show', $dish) }}" type="button"
                                                class="btn m-1 btn-info">Show
                                                dish</a>
                                        @if (Auth::user()->role >= 10)
                                            <a href="{{ route('dish_edit', $dish) }}" type="button"
                                                class="btn m-1 btn-warning">Edit</a>
                                            <form action="{{ route('dish_delete', $dish) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn m-1 btn-danger">Delete dish</button>
                                            </form>
                                        @endif
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No dishes found</li>
                            @endforelse
                        </ul>
                    </div>
                    {{ $dishes->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
