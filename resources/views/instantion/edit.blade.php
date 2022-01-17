@extends('layouts.default')
@section('title', 'Update')

@section('content')
<h1 style="color:green">Edit Data Instansi</h1>

<form action="/instantion/{{ $instantion->id }}/update" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $instantion->name}}">
                </div>
            </div>

            <div class="row m-3">
                
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Kepala Perusahaan</label>
                    <input type="text" name="head_of_company" class="form-control"  value="{{ $instantion->head_of_company}}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">No Handphone</label>
                    <input type="text" name="phone" class="form-control"  value="{{ $instantion->phone }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $instantion->email }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Address</label>
                    <input type="text" name="address" class="form-control" value="{{ $instantion->address }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Platfond</label>
                    <input type="text" name="platfond" class="form-control" value="{{ $instantion->platfond }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Source</label>
                    <input type="text" name="source" class="form-control" value="{{ $instantion->source }}">
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