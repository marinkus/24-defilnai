@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
                    <div class="card-header">
                        <h2>Saloon: {{$saloon->title}}</h2>
                        <h3>Address: {{ $saloon->address }}, Phone: {{ $saloon->phone }}</h3>
                    </div>
                    <div class="card-body col-6">
                        <p class="title">Masters</p>
                        <ul class="list-group">
                            @forelse($saloon->getMasters as $master)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <p class="description">{{ $master->name }} {{ $master->surname }}</p>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">This saloon has no beauty masters.</li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="card-body col-6">
                        <p class="title">Services</p>
                        <ul class="list-group">
                            @forelse($saloon->getServices as $service)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <p class="description"><span class="title">{{ $service->title }}</span> Price: {{ $service->price  }} EUR, Duration: {{ $service->duration }} minutes</p>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">This saloon has no services added yet.</li>
                            @endforelse
                        </ul>
                    </div>
        </div>
    </div>
@endsection
