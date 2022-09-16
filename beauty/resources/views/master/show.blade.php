@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Master</h2>
                    </div>
                    <div class="card-body">
                        <h3>{{ $master->name }} {{ $master->surname }}</h3>
                        <h4>Workplace: {{ $master->getSaloon->title}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
