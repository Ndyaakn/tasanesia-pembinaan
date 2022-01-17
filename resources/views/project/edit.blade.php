@extends('layouts.default')
@section('title', 'Update')

@section('content')
<h1 style="color:green">Edit Data Project</h1>

<form action="/project/{{ $project->id }}/update" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Project name</label>
                    <input type="text" name="project_name" class="form-control" value="{{ $project->project_name}}">
                </div>
            </div>

            <div class="row m-3">
                
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Pm name</label>
                    <input type="text" name="pm_name" class="form-control"  value="{{ $project->pm_name}}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Pm phone</label>
                    <input type="text" name="pm_phone" class="form-control"  value="{{ $project->pm_phone }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Pm email</label>
                    <input type="text" name="pm_email" class="form-control" value="{{ $project->pm_email }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Main location</label>
                    <input type="text" name="main_location" class="form-control" value="{{ $project->main_location }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Start date</label>
                    <input type="text" name="start_date" class="form-control" value="{{ $project->start_date }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Description</label>
                    <input type="text" name="description" class="form-control" value="{{ $project->description }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-3 col-form-label">Total amount</label>
                    <input type="text" name="total_amount" class="form-control" value="{{ $project->total_amount }}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-3 col-form-label">Amount</label>
                    <input type="text" name="amount" class="form-control" value="{{ $project->amount }}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Document 1</label>
                    <input type="text" name="document_1" class="form-control" value="{{ $project->document_1 }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Document 2</label>
                    <input type="text" name="document_2" class="form-control" value="{{ $project->document_2 }}">
                </div>
            </div>
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Notes</label>
                    <input type="text" name="notes" class="form-control" value="{{ $project->notes }}">
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