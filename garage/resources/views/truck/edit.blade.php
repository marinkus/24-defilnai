@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Truck</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('t_update', $truck) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="input-group mb-3">
                                <span class="input-group-text">Maker</span>
                                <input value="{{ old('maker', $truck->maker) }}" type="text" class="form-control"
                                    name="maker">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Make year</span>
                                <input value="{{ old('make_year', $truck->make_year) }}" type="number"
                                    class="form-control"name="make_year">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">License plate</span>
                                <input value="{{ old('plate', $truck->plate) }}" type="text" class="form-control"
                                    name="plate">
                            </div>
                            <select class="form-select mb-3" name="mechanic_id">
                                <option selected value="0">Choose mechanic</option>
                                @foreach ($mechanics as $mechanic)
                                    <option value="{{ $mechanic->id }}" @if ($mechanic->id == old('mechanic_id',$truck->mechanic_id)) selected @endif>
                                        {{ $mechanic->name }} {{ $mechanic->surname }}</option>
                                @endforeach

                            </select>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Mechanic notice</span>
                                <textarea class="form_control" type="text" cols="40" rows="15" class="form-control"
                                    name="mechanic_notices"> {{ old('mechanic_notices', $truck->mechanic_notices) }}</textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
