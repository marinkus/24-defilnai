@extends('layouts.app')

@section('content')
    <h2>Make a wish...</h2>

    <form action={{route('store')}} class="row col-12" method="post">
        @csrf
        <div class="container">
            <div class="col-4">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="col-4">
                <label class="form-label">Class</label>
                <input type="text" class="form-control" name="class" placeholder="For example: 1b">
            </div>
            <div class="col-4">
                <label class="form-label">Wish title</label>
                <input type="text" class="form-control" name="title" placeholder="For example: Dog">
            </div>
            <div class="col-4">
                <label class="form-label">Describe, why you dream about it and leave a Santa message.</label>
                <textarea class="form-control" name="description" cols="63" rows="10"></textarea>
            </div>
            <div class="col-4">
                <label for="inputCity" class="form-label">Link to your dream..</label>
                <input type="url" name="link" class="form-control">
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-primary">Dream!</button>
            </div>
        </div>
    </form>
@endsection('content')
