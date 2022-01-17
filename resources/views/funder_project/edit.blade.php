@extends('layouts.default')
@section('title', 'Update')

@section('content')
<h1 style="color:green">Edit Data FunderProject</h1>

<form action="/funder_project/{{ $funder_project->id }}/update" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Total Fund</label>
                    <input type="text" name="total_fund" class="form-control" value="{{ $funder_project->total_fund}}">
                </div>
            </div>

            <div class="row m-3">
                
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Benefit</label>
                    <input type="text" name="benefit" class="form-control"  value="{{ $funder_project->benefit}}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Fixfund</label>
                    <input type="text" name="fixfund" class="form-control"  value="{{ $funder_project->fixfund }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Permanent Fund</label>
                    <input type="text" name="permanent_fund" class="form-control" value="{{ $funder_project->permanent_fund }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Temporary Fund</label>
                    <input type="text" name="temporary_fund" class="form-control" value="{{ $funder_project->temporary_fund }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Count Temporary Fund</label>
                    <input type="text" name="count_temporary_fund" class="form-control" value="{{ $funder_project->count_temporary_fund }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Notes</label>
                    <input type="text" name="notes" class="form-control" value="{{ $funder_project->notes}}">
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