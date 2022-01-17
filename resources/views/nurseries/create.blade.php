@extends('layouts.default')

@section('title', 'Nurseries')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

<form action="{{ route('nurseries.store') }}" method="POST">
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
                <label for="" class="col-sm-2 col-form-label">Kepala perusahaan</label>
                <div class="col-sm">
                    <input type="text" name="head_of_company" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm">
                    <input type="text" name="address" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">No handphone</label>
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
                <label for="" class="col-sm-2 col-form-label">Fax</label>
                <div class="col-sm">
                    <input type="text" name="fax" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Web</label>
                <div class="col-sm">
                    <input type="text" name="web" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">No Rekening Bank</label>
                <div class="col-sm">
                    <input type="text" name="bank_accountno" class="form-control">
                </div>
            </div>
            
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Area</label>
                <div class="col-sm">
                    <input type="text" name="area" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Omset Perbulan</label>
                <div class="col-sm">
                    <input type="text" name="monthly_omzet" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Total Kapasitas</label>
                <div class="col-sm">
                    <input type="text" name="total_capacity" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Jumlah Karyawan Tetap</label>
                <div class="col-sm">
                    <input type="text" name="permanent_emp" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Jumlah Karyawan Tidak Tetap</label>
                <div class="col-sm">
                    <input type="text" name="non_permanent_emp" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Potensi</label>
                <div class="col-sm">
                    <input type="text" name="potency" class="form-control">
                </div>
            </div>
            
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Luas Tanah Yang Ada</label>
                <div class="col-sm">
                    <input type="text" name="is_verified" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Perkembangan</label>
                <div class="col-sm">
                    <input type="text" name="existing_land" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm">
                    <input type="text" name="developing_land" class="form-control">
                </div>
            </div>
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Is verified</label>
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