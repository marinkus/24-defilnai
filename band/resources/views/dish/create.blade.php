@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Add new dish</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('dish_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <span class="input-group-text">Title</span>
                                <input value="{{old('title')}}" type="text" class="form-control" name="title">
                            </div>
                            <div class="mb-3">
                                <span class="input-group-text">Price in euros</span>
                                <input value="{{old('price')}}" type="text" class="form-control" name="price">
                            </div>
                            <select class="form-select mb-3" name="restaurant_id">
                                <option selected value="0">Choose restaurant:</option>
                                @foreach($restaurants as $restaurant)
                                <option value="{{$restaurant->id}}">{{$restaurant->title}}</option>
                                @endforeach
                            </select>

                            <input type="file" class="form-control mt-4" name="image">
                            <button type="submit" class="btn btn-primary mt-4">Create dish</button>
                        </form>
                    </div>
                    <h3> Restaurant: {{$restaurant->title}} </h3>
                </div>
            </div>
        </div>
    </div>
@endsection
