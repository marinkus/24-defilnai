@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>New restaurant</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('restaurant_store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                              <span class="input-group-text">Name of restaurant:</span>
                              <input value="{{old('title')}}" type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Adress</span>
                              <input value="{{old('address')}}" type="text" class="form-control" name="address">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">City</span>
                              <input value="{{old('city')}}" type="text" class="form-control" name="city">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Working hours</span>
                              <input value="{{old('worktime')}}" type="text" class="form-control" name="worktime">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Add new restaurant</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
