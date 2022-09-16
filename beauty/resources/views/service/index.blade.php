@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h2>All services database:</h2>
                        <ul class="list-group">
                            @forelse($services as $service)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <h3>{{ $service->title }}</h3>
                                            <p>Duration: {{ $service->duration }} min</p>
                                            <p>Price: {{ $service->price }} EUR</p>
                                        </div>
                                        <div class="buttons">
                                            <a href="{{ route('service_edit', $service)}}" type="button" class="btn btn-warning">Edit</a>
                                            <form action="{{ route('service_delete', $service) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete service</button>
                                            </form>
                                        </div>
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
