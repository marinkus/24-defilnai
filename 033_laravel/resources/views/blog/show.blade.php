@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Post</h2>
                    </div>
                    <div class="card-body">
                        <h3>{{$blog->title}}</h3>
                        <p>{{$blog->post}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
