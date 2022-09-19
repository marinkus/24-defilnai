@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <h2>Trucks in garage</h2>
                        <ul class="list-group">
                            @forelse($trucks as $truck)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <h3>{{ $truck->maker }} {{ $truck->make_year }}</h3>
                                            <h2><span class="btn"> License plate: </span>{{ $truck->plate }}</h2>
                                                <h2><span class="btn"> Mechanic working: </span><a href="{{route('m_show', $truck->getMechanic->id)}}">{{$truck->getMechanic->name}} {{$truck->getMechanic->surname}}</a></h2>
                                        @if ($truck->photo)
                                        <h3>With photo</h3>
                                        @endif
                                            </div>
                                        <div class="buttons">
                                            <a href="{{ route('t_show', $truck) }}" type="button" class="btn btn-info">Show
                                                info</a>
                                            <a href="{{ route('t_edit', $truck) }}" type="button"
                                                class="btn btn-warning">Edit info</a>
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
