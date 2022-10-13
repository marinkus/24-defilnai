@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Change Dish info</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dish_update', $dish, $restaurants) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <span class="input-group-text">Title</span>
                                <input value="{{ $dish->title }}" type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                                <span class="input-group-text">Price</span>
                                <input value="{{ $dish->price }}" type="text" class="form-control" name="price">
                            </div>
                            <span class="input-group-text">Choose restaurant:</span>
                            <select class="form-select mb-3" value={{ $dish->restaurant_id }} name="restaurant_id">
                                @foreach ($restaurants as $restaurant)
                                    <option value="{{ $restaurant->id }}">{{ $restaurant->title }}</option>
                                @endforeach
                            </select>
                            @if ($dish->image == null)
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
