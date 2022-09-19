@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Change Service info</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('service_update', $service, $saloons)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                              <span class="input-group-text">Name of the service:</span>
                              <input value="{{$service->title}}" type="text" class="form-control"name="title">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Duration:</span>
                              <input value="{{$service->duration}}" type="text" class="form-control" name="duration">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Price:</span>
                              <input value="{{$service->price}}" type="text" class="form-control" name="price">
                            </div>
                            <span class="input-group-text">Choose saloon:</span>
                            <select class="form-select mb-3" value= {{$service->saloon_id}} name="saloon_id">
                                @foreach($saloons as $saloon)
                                <option value="{{$saloon->id}}">{{$saloon->title}}</option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-primary mt-4">Save</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
