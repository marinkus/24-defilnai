@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Beauty masters:</h2>
                        <ul class="list-group">
                            @forelse($masters as $master)
                                <li class="line-content">
                                    <div class="container">
                                            <p class="title">{{ $master->name }} {{ $master->surname }}</p class="title">
                                        <div class="buttons">
                                            <a href="{{ route('master_show', $master) }}" type="button" class="btn btn-info">Show
                                                info</a>
                                            <a href="{{ route('master_edit', $master)}}" type="button" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('master_delete', $master) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Fire!</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No masters found</li>
                            @endforelse
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
