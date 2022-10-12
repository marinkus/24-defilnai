@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Tag</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('t_update', $tag)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                              <span class="input-group-text">Title</span>
                              <input value="{{$tag->title}}" type="text" class="form-control" name="title">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Update Tag</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
