@extends('layouts.default')

@section('title', 'funderproject')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

<form action="{{ route('funder_project.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Total Fund</label>
                <div class="col-sm">
                    <input type="text" name="total_fund" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Benefit</label>
                <div class="col-sm">
                    <input type="text" name="benefit" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Fixfund</label>
                <div class="col-sm">
                    <input type="text" name="fixfund" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Permanent Fund</label>
                <div class="col-sm">
                    <input type="text" name="permanent_fund" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Temporary Fund</label>
                <div class="col-sm">
                    <input type="text" name="temporary_fund" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Count Temporary Fund</label>
                <div class="col-sm">
                    <input type="text" name="count_temporary_fund" class="form-control">
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