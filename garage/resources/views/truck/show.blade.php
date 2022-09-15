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
                        <div class="truck-show">
                            <h3 class="title"><span class="small-text">Model: </span>{{ $truck->maker }} {{ $truck->make_year }}</h3>
                            <h2 class="plate"><span class="small-text">License plate: </span>{{ $truck->plate }}</h2>
                            <p class="description">{{ $truck->mechanic_notices }}</p>
                            <h5 class="title"><span class="small-text">Mechanic: </span>{{ $truck->getMechanic->name }} {{ $truck->getMechanic->surname }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
