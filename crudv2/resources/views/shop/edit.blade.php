@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 form-div mar-0">
                <form action="{{ route('shop_update', $shop) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <h3 class="heading">Edit</h3>
                    <div class="mb-3">
                        <span class="input-group-text">Title</span>
                        <input value="{{ old('title', $shop->title) }}" type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <span class="input-group-text">Address</span>
                        <input value="{{ old('address', $shop->address) }}" type="text" class="form-control"
                            name="address">
                    </div>
                    <div class="mb-3">
                        <span class="input-group-text">City</span>
                        <input value="{{ old('city', $shop->city) }}" type="text" class="form-control"
                            name="city">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Update</button>
                    <form action="{{ route('shop_delete', $shop) }}" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger mt-4">Delete</button>
                    </form>
                </form>
            </div>
        </div>
    </div>
@endsection
