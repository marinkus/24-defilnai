@extends('layouts.app')

@section('content')
    <div class="container --content">
        <div class="row justify-contnent-center">
            <div class="col-8">
                <div class="card-body">
                    <h2>Movies List</h2>
                    <ul class="list-group">
                        @forelse($movies as $movie)
                            <li class="list-group-item">
                                <div class="posts-list">
                                    <div class="content">
                                        <h4>{{ $movie->title }}, Price: {{ $movie->price }} EUR</h4>
                                        <h5>Category: <a href="{{ route('c_show', $movie->getCategory->id) }}">
                                                {{ $movie->getCategory->title }}</a></h5>
                                        @if ($movie->getPhotos()->count())
                                            <h5><a href="{{ $movie->lastImageUrl() }}" target="_BLANK">Photo 1 of
                                                    [{{ $movie->getPhotos->count() }}]</a></h5>
                                        @endif
                                    </div>
                                    <h5>Movie rating: {{$movie->rating ?? 'No raiting'}}</h5>
                                    <div class="buttons">
                                        <form action="{{ route('rate', $movie) }}" method="post">
                                            @method('put')
                                            @csrf
                                            <select name="rate">
                                                @foreach (range(1, 10) as $option)
                                                    <option value="{{ $option }}">{{$option}}</option>
                                                @endforeach
                                            </select>
                                            <button type="submit" class="btn btn-info">Rate</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="list-group-item">No movies found</li>
                        @endforelse
                    </ul>

                </div>
            </div>
            {{-- {{ $movies->links() }} --}}
        </div>
    </div>
    </div>
@endsection
