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
                                <li class="line-content">
                                        <div class="container">
                                            <p class="title">{{ $saloon->title }}</p>
                                            <p class="description">Address: {{ $saloon->address }}, Phone: {{ $saloon->phone }}</p>
                                        </div>
                                        <div class="container buttons">
                                            <a href="{{ route('saloon_show', $saloon) }}" type="button" class="btn btn-info">Saloon info</a>
                                            <a href="{{ route('saloon_edit', $saloon)}}" type="button" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('saloon_delete', $saloon) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Bankrupt</button>
                                            </form>
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
