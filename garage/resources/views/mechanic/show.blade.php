@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Mechanic</h2>
                    </div>
                    <div class="card-body">
                        <h3>{{$mechanic->name}} {{$mechanic->surname}}</h3>
                        <p>Info will be posted later...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
