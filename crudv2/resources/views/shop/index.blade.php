@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            @forelse($shops as $shop)
                <div class="col-3 form-div mt-2">
                    <h3 class="heading">{{ $shop->title }}</h3>
                    <p class="description">{{ $shop->address }}, {{ $shop->city }}</p>
                    <div class="buttons mb-2">
                        <a href="{{ route('shop_edit', $shop) }}" type="button" class="btn btn-secondary">Edit</a>
                        <form action="{{ route('shop_delete', $shop) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            @empty
                <p class="description">No shops yet.</p>
            @endforelse

        </div>
    </div>
@endsection
