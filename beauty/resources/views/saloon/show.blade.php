@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Saloon: {{$saloon->title}}</h2>
                    </div>
                    <div class="card-body">
                        <h3>Address: {{ $saloon->address }}, Phone: {{ $saloon->phone }}</h3>
                        <ul class="list-group">
                            {{-- @forelse($saloon->getMasters as $master)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <h3>{{ $master->name }} {{ $master->surname }}</h3>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No mechanics found</li>
                            @endforelse --}}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
