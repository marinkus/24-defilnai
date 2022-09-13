@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit post</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update', $blog)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                              <label for="title" class="input-group-text">Title</label>
                              <input name="title" type="text" class="form-control" sname="title" value="{{$blog->title}}">
                              <div class="form-text">Tell me about your day.</div>
                            </div>
                            <div class="mb-3">
                              <label for="post" class="input-group-text">Content</label>
                              <textarea class="form-control" name="post">{{$blog->post}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Update</button>
                            <a href="{{ route('index')}}" class="btn btn-secondary mt-4">Back</a>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
