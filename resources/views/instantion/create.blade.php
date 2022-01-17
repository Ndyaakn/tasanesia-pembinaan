@extends('layouts.default')

@section('title', 'Instantion')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

<form action="{{ route('instantion.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm">
                    <input type="text" name="name" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Kepala Perusahaan</label>
                <div class="col-sm">
                    <input type="text" name="head_of_company" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">No Handphone</label>
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
                <label for="" class="col-sm-2 col-form-label">Platfond</label>
                <div class="col-sm">
                    <input type="text" name="plafond" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Source</label>
                <div class="col-sm">
                    <input type="text" name="source" class="form-control">
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