@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>New Movie</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('m_update', $movie) }}" method="post" enctype="multipart/form-data">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Title</span>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title', $movie->title) }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Price</span>
                                <input type="text" name="price" class="form-control"
                                    value="{{ old('price', $movie->price) }}">
                            </div>
                            <div data-clone class="input-group mb-3">
                                <span class="input-group-text">Photo</span>
                                <input type="file" class="form-control" name="photo[]" multiple>
                            </div>
                            <div class="img-small-ch mt-3">
                                @forelse($movie->getPhotos as $photo)
                                    <div class="image">
                                        <label for="{{ $photo->id }}-del-photo">
                                            X
                                        </label>
                                        <input type="checkbox" value="{{ $photo->id }}"
                                            id="{{ $photo->id }}-del-photo" name="delete_photo[]">
                                        <img src="{{ $photo->url }}" alt="photo">
                                    </div>
                                @empty
                                    <div class="img-small mt-3">
                                        <h5>// Movie has no images</h5>
                                    </div>
                                @endforelse
                            </div>

                            <select name="category_id" class="form-select mt-3">
                                <option value="0">Choose category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @if ($category->id == old('category_id', $movie->category_id)) selected @endif>
                                        {{ $category->title }}</option>
                                @endforeach
                            </select>
                            @csrf
                            @method('put')
                            <div class="tags">
                                @forelse($tags as $tag)
                                <div class="form-check">
                                    <input @if(in_array($tag->id, $checkedTags)) checked @endif class="form-check-input" name="tag[]" type="checkbox" value="{{$tag->id}}" id="_{{$tag->id}}">
                                    <label class="form-check-label" for="_{{$tag->id}}">
                                      {{$tag->title}}
                                    </label>
                                  </div>
                                @empty
                                  <h4>No tags founds</h4>
                                @endforelse
                            </div>
                            <button type="submit" class="btn btn-secondary mt-4">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
