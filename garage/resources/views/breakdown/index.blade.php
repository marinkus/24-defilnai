@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                @include('breakdown.create')
            </div>
            <div class="col-7">
                list
            </div>
        </div>
    </div>
@endsection