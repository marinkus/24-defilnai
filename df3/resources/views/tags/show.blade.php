@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>tag</h2>
                    </div>
                    <div class="card-body">
                        <h3>{{ $tag->title }}</h3>
                        <ul class="list-group">
                            {{-- @forelse($tag->movies as $tag)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                           <h4> {{$movie->title}} </h4>
                                           <h5>Price: {{$movie->price}} EUR</h5>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No movies found</li>
                            @endforelse --}}
                        </ul>
                        {{-- @if(Auth::user()->role >=10)
                        <div class="buttons">
                            <form action="{{ route('t_delete_tags', $tag) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Delete all</button>
                            </form>
                        </div>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
