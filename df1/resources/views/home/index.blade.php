@extends('layouts.app')

@section('content')
    <div class="container --content">
        <div class="row justify-contnent-center">
            <div class="card">
                <div class="card-header">
                    <form action="{{route('home')}}" method="get">
                        <div class="container">
                            <div class="row">
                                <div class="col-5">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6">
                                                <select name="cat" class="form-select mt-1">
                                                    <option value="0">All</option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->id}}" @if($cat==$category->id) selected @endif>{{$category->title}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <select name="sort" class="form-select mt-1">
                                                    <option value="0">All</option>
                                                    @foreach($sortSelect as $option)
                                                    <option value="{{$option[0]}}" @if($sort==$option[0]) selected @endif>{{$option[1]}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-7">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-8">
                                                <div class="input-group mb-3">
                                                    {{-- <input type="text" name="s" class="form-control" value="{{$s}}"> --}}
                                                    <button type="submit" class="input-group-text">Search</button>
                                                </div>
                                            </div>
                                            <div class="col-2">
                                                <a href="{{route('home')}}" class="btn btn-secondary">Reset</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
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
