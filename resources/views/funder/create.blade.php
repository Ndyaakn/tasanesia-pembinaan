@extends('layouts.default')

@section('title', 'Funder')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

<form action="{{ route('funder.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Date of birth</label>
                <div class="col-sm">
                    <input type="text" name="date_of_birth" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Place of birth</label>
                <div class="col-sm">
                    <input type="text" name="place_of_birth" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Phone</label>
                <div class="col-sm">
                    <input type="text" name="phone" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm">
                    <input type="text" name="email" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm">
                    <input type="text" name="address" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Notes</label>
                <div class="col-sm">
                    <input type="text" name="notes" class="form-control">
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit">
                SUBMIT
            </button>
        </div>
    </div>
</form>

@endsection