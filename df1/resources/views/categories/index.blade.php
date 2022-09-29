@extends('layouts.app')

@section('content')
    <div class="container --content">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse($categories as $category)
                                <li class="list-group-item">
                                    <div class="categories-list">
                                        <div class="content">
                                            <h2>{{ $category->title }}</h2>

                                        </div>

                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No categories found</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
