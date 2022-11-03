@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>{{ $shop->title }}</h2>
                    </div>
                    <div class="card-body">
                        <h3>Price:  Eur</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
