@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>New Post</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                              <label for="title" class="input-group-text">Title</label>
                              <input value="{{old('title')}}" type="text" class="form-control" id="title" name="title">
                              <div class="form-text">Tell me about your day.</div>
                            </div>
                            <div class="mb-3">
                              <label for="post" class="input-group-text">Content</label>
                              <textarea class="form-control" name="post">{{old('post')}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Post your post.</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
