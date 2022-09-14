@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-contnent-center">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit Mechanic</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{route('m_store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                              <span class="input-group-text">Name</span>
                              <input value="{{old('name')}}" type="text" class="form-control"name="name">
                            </div>
                            <div class="mb-3">
                              <span class="input-group-text">Surname</span>
                              <input value="{{old('surname')}}" type="text" class="form-control" name="surname">
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Create mechanic</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
