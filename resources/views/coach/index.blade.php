@extends('layouts.default')

@section('title', 'Coach')

@section('content')

<div class="card">
    <div class="card-body">
        <div class="container">
            @if(session('sukses'))
            <div class="alert alert-success" role="alert">
              {{session ('sukses')}}
            </div>
            @endif
              <div class="row justify-content-between">
                  <div class="col-3">
                       <h1 style="color:green">Data Pembina</h1>
                  </div>
                  <div class="col-3">          
                      <button type="button" class="btn btn-outline-success"><a href="{{ route('coach.create') }}">Tambah Pembina</a></button>
                      <button type="button" class="btn btn-success mx-2"><i class="fas fa-search mr-2"></i>Search</button>
                  </div>
                  <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Pendidikan Terakhir</th>
                    <th>Sekolah</th>
                    <th>Fakultas</th>
                    <th>Jurusan</th>
                    <th>Organisasi</th>
                    <th>Posisi Dalam Organisasi</th>
                    <th>Nama Projek</th>
                    <th>Posisi</th>
                    <th>skill</th>
                    <th>Keterangan</th>
                    <th>status</th>
                  </tr>
                  @foreach($data_coach as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>                
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->degree }}</td>
                    <td>{{ $data->school }}</td>
                    <td>{{ $data->faculty }}</td>
                    <td>{{ $data->major }} </td>
                    <td>{{ $data->organization }}</td>
                    <td>{{ $data->position_in_org }}</td>
                    <td>{{ $data->project_name }}</td>
                    <td>{{ $data->position_in_project }}</td>
                    <td>{{ $data->skill }}</td>          
                    <td>{{ $data->notes }}</td>
                    <td>
                        <form action="{{ route('coach.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                                DELETE
                            </button>
                        </form>
                        <form action="{{ route('coach.edit', $data->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-sm btn-success mt-2">
                                UPDATE
                            </button>
                        </form>
                    </td>
                  </tr> 
                  @endforeach
              </table>
              </div>
          </div>
        {{-- <a href="{{ route('coach.create') }}" class="btn btn-primary mb-3">
            ADD DATA
        </a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>degree</th>
                    <th>school</th>
                    <th>faculty</th>
                    <th>major</th>
                    <th>organization</th>
                    <th>position_in_org</th>
                    <th>project_name</th>
                    <th>position_in_project</th>
                    <th>skill</th>
                    <th>notes</th>
                    <th>status</th>
                </tr>
            </thead>

            @foreach ($data_coach as $data)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>                
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->degree }}</td>
                    <td>{{ $data->school }}</td>
                    <td>{{ $data->faculty }}</td>
                    <td>{{ $data->major }} </td>
                    <td>{{ $data->organization }}</td>
                    <td>{{ $data->position_in_org }}</td>
                    <td>{{ $data->project_name }}</td>
                    <td>{{ $data->position_in_project }}</td>
                    <td>{{ $data->skill }}</td>          
                    <td>{{ $data->notes }}</td>
                        
                   
                    <td>
                        <form action="{{ route('coach.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                                DELETE
                            </button>
                        </form>
                        <form action="{{ route('coach.edit', $data->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-sm btn-success mt-2">
                                UPDATE
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table> --}}
    </div>
</div>

@endsection