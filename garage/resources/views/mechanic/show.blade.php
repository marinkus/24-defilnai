@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Mechanic</h2>
                    </div>
                    <div class="card-body">
                        <h3>{{ $mechanic->name }} {{ $mechanic->surname }}</h3>
                        <ul class="list-group">
                            @forelse($mechanic->getTrucks as $truck)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <h3>{{ $truck->maker }} {{ $truck->make_year }}</h3>
                                            <h2><span class="btn"> License plate: </span>{{ $truck->plate }}</h2>
                                        </div>
                                        <div class="buttons">
                                            <form action="{{ route('t_delete', $truck) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Delete</button>
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
