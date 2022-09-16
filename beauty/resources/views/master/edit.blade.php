@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Change Master info</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('master_update', $master)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                              <span class="input-group-text">Name</span>
                              <input value="{{$master->name}}" type="text" class="form-control"name="name">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Surname</span>
                              <input value="{{$master->surname}}" type="text" class="form-control" name="surname">
                            </div>
                            <select class="form-select mb-3" name="saloon_id">
                                <option value="$master->saloon_id" selected value="0">Choose saloon:</option>
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
