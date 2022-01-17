@extends('layouts.default')
@section('title', 'Update')

@section('content')
<h1 style="color:green">Edit Data Donatur</h1>

<form action="/funder/{{ $funder->id }}/update" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $funder->name}}">
                </div>
            </div>

            <div class="row m-3">
                
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Date of birthr</label>
                    <input type="text" name="date_of_birth" class="form-control"  value="{{ $funder->date_of_birth}}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Place of birth</label>
                    <input type="text" name="place_of_birth" class="form-control"  value="{{ $funder->place_of_birth }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $funder->phone }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $funder->email }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $funder->address }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Notes</label>
                    <input type="text" name="notes" class="form-control" value="{{ $funder->notes}}">
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