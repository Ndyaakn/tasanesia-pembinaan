@extends('layouts.default')
@section('title', 'Update')

@section('content')
<h1 style="color:green">Edit Data Pembina</h1>

<form action="/coach/{{ $coach->id }}/update" method="POST">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $coach->name}}">
                </div>
            </div>

            <div class="row m-3">
                
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                    <input type="text" name="degree" class="form-control"  value="{{ $coach->degree}}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Sekolah</label>
                    <input type="text" name="school" class="form-control"  value="{{ $coach->school }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Fakultas</label>
                    <input type="text" name="faculty" class="form-control" value="{{ $coach->faculty }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Jurusan</label>
                    <input type="text" name="major" class="form-control" value="{{ $coach->major }}">
                </div>
            </div>

            <div class="row m-3">
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Organisasi</label>
                    <input type="text" name="organization" class="form-control" value="{{ $coach->organization }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Posisi Dalam Organisasi</label>
                    <input type="text" name="position_in_org" class="form-control" value="{{ $coach->position_in_org }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-3 col-form-label">Nama Projek (yang pernah diikuti)</label>
                    <input type="text" name="project_name" class="form-control" value="{{ $coach->project_name }}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-3 col-form-label">Posisi (projek yang pernah diikuti)</label>
                    <input type="text" name="position_in_project" class="form-control" value="{{ $coach->position_in_project }}">
                </div>
            </div>

            <div class="row m-3">              
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Skill</label>
                    <input type="text" name="skill" class="form-control" value="{{ $coach->skill }}">
                </div>
            </div>

            <div class="row m-3">               
                <div class="col-sm">
                    <label for="" class="col-sm-2 col-form-label">Keterangan</label>
                    <input type="text" name="notes" class="form-control" value="{{ $coach->notes }}">
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