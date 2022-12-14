@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>New Saloon</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('saloon_store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                              <span class="input-group-text">Name of saloon:</span>
                              <input value="{{old('title')}}" type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Adress</span>
                              <input value="{{old('adress')}}" type="text" class="form-control" name="address">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Phone</span>
                              <input value="{{old('phone')}}" type="text" class="form-control" name="phone">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Add new saloon</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
