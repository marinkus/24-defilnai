@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Add service</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('service_store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                              <span class="input-group-text">Name of the service:</span>
                              <input value="{{old('title')}}" type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Duration (minutes):</span>
                              <input value="{{old('duration')}}" type="text" class="form-control" name="duration">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Price (EUR):</span>
                              <input value="{{old('price')}}" type="text" class="form-control" name="price">
                            </div>
                            <select class="form-select mb-3" name="saloon_id">
                                <option selected value="0">Choose saloon:</option>
                                @foreach($saloons as $saloon)
                                <option value="{{$saloon->id}}">{{$saloon->title}}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary mt-4">Submit service</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
