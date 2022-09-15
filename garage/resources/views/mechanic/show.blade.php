@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Truck</h2>
                    </div>
                    <div class="card-body">
                        <h3>{{ $truck->maker }} {{ $truck->make_year }}</h3>
                        <h2>{{ $truck->plate }}</h2>
                        <p>{{ $truck->mechanic_notices }}</p>
                        <span>Mechanic: {{ $mechanic_id }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
