@extends('layouts.default')

@section('title', 'Coach')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success">
    {{Session::get('success')}}
</div>
@endif

<form action="{{ route('coach.store') }}" method="POST">
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
                <label for="" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                <div class="col-sm">
                    <input type="text" name="degree" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Sekolah</label>
                <div class="col-sm">
                    <input type="text" name="school" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Fakultas</label>
                <div class="col-sm">
                    <input type="text" name="faculty" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm">
                    <input type="text" name="major" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Organisasi</label>
                <div class="col-sm">
                    <input type="text" name="organization" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Posisi Dalam Organisasi</label>
                <div class="col-sm">
                    <input type="text" name="position_in_org" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Nama Projek (yang pernah diikuti)</label>
                <div class="col-sm">
                    <input type="text" name="project_name" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Posisi (projek yang pernah diikuti)</label>
                <div class="col-sm">
                    <input type="text" name="position_in_project" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Skill</label>
                <div class="col-sm">
                    <input type="text" name="skill" class="form-control">
                </div>
            </div>

            <div class="row m-3">
                <label for="" class="col-sm-2 col-form-label">Keterangan</label>
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