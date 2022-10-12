@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>New Movie</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('m_store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="input-group mb-3">
                                <span class="input-group-text">Title</span>
                                <input value="{{ old('title') }}" type="text" class="form-control" name="title">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-text">Price</span>
                                <input value="{{ old('price') }}" type="text" class="form-control" name="price">
                            </div>
                            <select class="form-select mb-3" name="category_id">
                                <option selected value="0">Choose category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == old('category_id')) selected @endif>
                                        {{ $category->title }}</option>
                                @endforeach
                            </select>
                            <div data-clone class="input-group mb-3">
                                <span class="input-group-text">Photo</span>
                                <input type="file" class="form-control" name="photo[]" multiple>
                            </div>
                            <div class="tags">
                                @forelse($tags as $tag)
                                <div class="form-check">
                                    <input class="form-check-input" name="tag[]" type="checkbox" value="{{$tag->id}}" id="_{{$tag->id}}">
                                    <label class="form-check-label" for="_{{$tag->id}}">
                                      {{$tag->title}}
                                    </label>
                                  </div>
                                @empty
                                  <h4>No tags founds</h4>
                                @endforelse
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Add movie</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
