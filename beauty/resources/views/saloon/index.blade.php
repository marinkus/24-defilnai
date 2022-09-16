@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h2>List of Saloons</h2>
                        <ul class="list-group">
                            @forelse($saloons as $saloon)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <h3>{{ $saloon->title }}</h3>
                                            <h2>Address: {{ $saloon->address }}, Phone: {{ $saloon->phone }}</h2>
                                        </div>
                                        <div class="buttons">
                                            <a href="{{ route('saloon_show', $saloon) }}" type="button" class="btn btn-info">Pick</a>
                                            <a href="{{ route('saloon_edit', $saloon)}}" type="button" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('saloon_delete', $saloon) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Bankrupt</button>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No saloons found</li>
                            @endforelse
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
