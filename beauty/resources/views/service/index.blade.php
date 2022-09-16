@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2>All services database:</h2>
                        <ul>
                            @forelse($services as $service)
                                <li class="line-content">
                                    <div class="container">
                                        <p class="title">{{ $service->title }}</p>
                                        <p class="description">Duration: {{ $service->duration }} min</p>
                                        <p class="description">Price: {{ $service->price }} EUR</p>
                                    </div>
                                    <div class="container">
                                    <p class="description">Saloon: {{$service->getSaloon->title}}</p>
                                    </div>
                                    <div class="container buttons">
                                        <a href="{{ route('service_edit', $service) }}" type="button"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('service_delete', $service) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete service</button>
                                        </form>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No services found.</li>
                            @endforelse
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
