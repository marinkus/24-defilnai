@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Posts</h2>
                        <a href="{{ route('create') }}" type="button" class="btn btn-info">Create</a>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse($blogs as $blog)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <h2>{{ $blog->title }}</h2>
                                        </div>
                                        <div class="buttons">
                                            <a href="{{ route('show', $blog) }}" type="button" class="btn btn-info">Show
                                                content</a>
                                            <button type="button" class="btn btn-warning">Edit</button>
                                            <form action="{{ route('delete', $blog) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No posts found</li>
                            @endforelse
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
