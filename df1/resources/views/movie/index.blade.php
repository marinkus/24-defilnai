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
                                        <h3>{{ $movie->title }},  Price: {{ $movie->price }}</h3>
                                    </div>
                                    <div class="buttons">
                                        <a href="{{ route('m_show', $movie) }}" type="button" class="btn btn-info">Show
                                            info</a>
                                        <a href="{{ route('m_edit', $movie) }}" type="button" class="btn btn-warning">Edit
                                            info</a>
                                        <form action="{{ route('m_delete', $movie) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
