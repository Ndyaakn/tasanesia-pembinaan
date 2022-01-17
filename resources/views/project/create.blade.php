@extends('layouts.default')

@section('title', 'Project')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

<form action="{{ route('project.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Project name</label>
                <div class="col-sm">
                    <input type="text" name="project_name" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Pm name</label>
                <div class="col-sm">
                    <input type="text" name="pm_name" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Pm phone</label>
                <div class="col-sm">
                    <input type="text" name="pm_phone" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Pm email</label>
                <div class="col-sm">
                    <input type="text" name="pm_email" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Main location</label>
                <div class="col-sm">
                    <input type="text" name="main_location" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Start date</label>
                <div class="col-sm">
                    <input type="text" name="start_date" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm">
                    <input type="text" name="description" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Total amount</label>
                <div class="col-sm">
                    <input type="text" name="total_amount" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm">
                    <input type="text" name="amount" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Document_1</label>
                <div class="col-sm">
                    <input type="text" name="document_1" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Document_2</label>
                <div class="col-sm">
                    <input type="text" name="document_2" class="form-control">
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