@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-8">
                <div class="card">
                    <div class="container">
                        <form action="{{ route('m_index') }}" method="get">
                            <h2>Mechanics</h2>
                            <div class="row">
                                <div class="col-4">
                                    <select class="form-select" name="sort">
                                        <option value="name_asc" @if ('name_asc' == $sortSelect) selected @endif>Name A-Z
                                        </option>
                                        <option value="name_desc" @if ('name_desc' == $sortSelect) selected @endif>Name Z-A
                                        </option>
                                        <option value="surname_asc" @if ('surname_asc' == $sortSelect) selected @endif>
                                            Surname A-Z</option>
                                        <option value="surname_desc" @if ('surname_desc' == $sortSelect) selected @endif>
                                            Surname A-Z</option>
                                    </select>
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary">Sort</button>
                                    <a href="{{ route('m_index') }}" class="btn btn-secondary">Reset</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse($mechanics as $mechanic)
                                <li class="list-group-item">
                                    <div class="posts-list">
                                        <div class="content">
                                            <h3>{{ $mechanic->name }} {{ $mechanic->surname }}</h3>
                                            <span>Number of trucks: {{ $mechanic->getTrucks()->count() }}</span>
                                        </div>
                                        <div class="buttons">
                                            <a href="{{ route('m_show', $mechanic) }}" type="button"
                                                class="btn btn-info">Show
                                                info</a>
                                            <a href="{{ route('m_edit', $mechanic) }}" type="button"
                                                class="btn btn-warning">Edit</a>
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
                    <div class="me-3 mx-3">
                        {{ $mechanics->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
