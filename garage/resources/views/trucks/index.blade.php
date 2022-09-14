@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Mechanics</h2>
                        <ul class="list-group">
                            @forelse($mechanics as $mechanic)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <h3>{{ $mechanic->name }} {{ $mechanic->surname }}</h3>
                                        </div>
                                        <div class="buttons">
                                            <a href="{{ route('m_show', $mechanic) }}" type="button" class="btn btn-info">Show
                                                info</a>
                                            <a href="{{ route('m_edit', $mechanic)}}" type="button" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('m_delete', $mechanic) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Fire!</button>
                                            </form>
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
