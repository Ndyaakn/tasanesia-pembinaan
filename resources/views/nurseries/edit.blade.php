@extends('layouts.default')
@section('title', 'Update')

@section('content')
<h1 style="color:green">Edit Data Petani</h1>

<form action="/nurseries/{{ $nurseries->id }}/update" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Nama</label>
                    <input type="text" name="name" class="form-control" value="{{ $nurseries->name}}">
                </div>
            </div>

            <div class="row m-3">
                
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Kepala Perusahaan</label>
                    <input type="text" name="head_of_company" class="form-control"  value="{{ $nurseries->head_of_company}}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Alamat</label>
                    <input type="text" name="address" class="form-control"  value="{{ $nurseries->address }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">No Handphone</label>
                    <input type="text" name="phone" class="form-control" value="{{ $nurseries->phone }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-3 col-form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="{{ $nurseries->email }}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-3 col-form-label">Fax</label>
                    <input type="text" name="fax" class="form-control" value="{{ $nurseries->fax }}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Web</label>
                    <input type="text" name="web" class="form-control" value="{{ $nurseries->web }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">No Rekening Bank</label>
                    <input type="text" name="bank_accountno" class="form-control" value="{{ $nurseries->bank_accountno }}">
                </div>
            </div>
            
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Area</label>
                    <input type="text" name="area" class="form-control" value="{{ $nurseries->area }}">
                </div>
            </div>
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Omset Perbulan</label>
                    <input type="text" name="monthly_omzet" class="form-control" value="{{ $nurseries->monthly_omzet }}">
                </div>
            </div>
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Total kapasitas</label>
                    <input type="text" name="total_capacity" class="form-control" value="{{ $nurseries->total_capacity }}">
                </div>
            </div>
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Jumlah karyawan tetap</label>
                    <input type="text" name="permanent_emp" class="form-control" value="{{ $nurseries->permanent_emp }}">
                </div>
            </div>
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Jumlah karyawan tidak tetap</label>
                    <input type="text" name="non_permanent_emp" class="form-control" value="{{ $nurseries->non_permanent_emp }}">
                </div>
            </div>
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Potensi</label>
                    <input type="text" name="potency" class="form-control" value="{{ $nurseries->potency }}">
                </div>
            </div>
            
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Luas tanah yang ada</label>
                    <input type="text" name="is_verified" class="form-control" value="{{ $nurseries->is_verified }}">
                </div>
            </div>
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Perkembangan tanah</label>
                    <input type="text" name="existing_land" class="form-control" value="{{ $nurseries->existing_land }}">
                </div>
            </div>
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                    <input type="text" name="developing_land" class="form-control" value="{{ $nurseries->developing_land }}">
                </div>
            </div>
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Is Verified</label>
                    <input type="text" name="notes" class="form-control" value="{{ $nurseries->notes }}">
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