@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit restaurant</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('restaurant_update', $restaurant)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                              <span class="input-group-text">Name of restaurant:</span>
                              <input value="{{$restaurant->title}}" type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Adress</span>
                              <input value="{{$restaurant->address}}" type="text" class="form-control" name="address">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">City</span>
                              <input value="{{$restaurant->city}}" type="text" class="form-control" name="city">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Working hours</span>
                              <input value="{{$restaurant->worktime}}" type="text" class="form-control" name="worktime">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Save changes</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
