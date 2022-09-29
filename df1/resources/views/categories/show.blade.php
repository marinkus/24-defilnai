@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Category</h2>
                    </div>
                    <div class="card-body">
                        <h3>{{ $category->title }}</h3>
                        <ul class="list-group">
                            @forelse($category->getMovies as $movie)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">

                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No mechanics found</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
