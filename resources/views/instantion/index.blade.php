@extends('layouts.default')

@section('title', 'Instantion')

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
                       <h1 style="color:green">Data Instansi</h1>
                  </div>
                  <div class="col-4">          
                      <button type="button" class="btn btn-outline-success"><a href="{{ route('instantion.create') }}">Tambah Instansi</a></button>
                      <button type="button" class="btn btn-success mx-2"><i class="fas fa-search mr-2"></i>Search</button>
                  </div>
                  <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kepala Perusahaan</th>
                    <th>No. Handphone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Platfond</th>
                    <th>Source</th>
                  </tr>
                  @foreach($data_instantion as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>                
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->head_of_company }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->address }} </td>
                    <td>{{ $data->plafond }}</td>
                    <td>{{ $data->source }} </td>
                    <td>
                        <form action="{{ route('instantion.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                                DELETE
                            </button>
                        </form>
                        <form action="{{ route('instantion.edit', $data->id) }}" method="POST">
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
        </div>
    </div>
</div>

@endsection