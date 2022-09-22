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
                        <form action="{{ route('master_update', $master, $saloons) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <span class="input-group-text">Name</span>
                                <input value="{{ $master->name }}" type="text" class="form-control"name="name">
                            </div>
                            <div class="mb-3">
                                <span class="input-group-text">Surname</span>
                                <input value="{{ $master->surname }}" type="text" class="form-control" name="surname">
                            </div>
                            <span class="input-group-text">Choose workplace:</span>
                            <select class="form-select mb-3" value={{ $master->saloon_id }} name="saloon_id">
                                @foreach ($saloons as $saloon)
                                    <option value="{{ $saloon->id }}">{{ $saloon->title }}</option>
                                @endforeach
                            </select>
                            @if ($master->image == null)
                                <input type="file" class="form-control mt-4" name="image">
                            @else
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" id="delete-photo"
                                        name="delete_photo">
                                    <label class="form-check-label" for="delete-photo">
                                        Delete photo
                                    </label>
                                </div>
                            @endif
                            <button type="submit" class="btn btn-primary mt-4">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
