@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-6 form-div mar-0">
                <form action="{{ route('shop_store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h3 class="heading">CREATE</h3>
                    <div class="mb-3">
                        <span class="input-group-text">Title</span>
                        <input value="{{ old('title') }}" type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <span class="input-group-text">Address</span>
                        <input value="{{ old('address') }}" type="text" class="form-control"
                            name="address">
                    </div>
                    <div class="mb-3">
                        <span class="input-group-text">City</span>
                        <input value="{{ old('city') }}" type="text" class="form-control"
                            name="city">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
