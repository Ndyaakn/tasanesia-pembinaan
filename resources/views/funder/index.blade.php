@extends('layouts.default')

@section('title', 'Funder')

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
                       <h1 style="color:green">Data Donatur</h1>
                  </div>
                  <div class="col-3">          
                      <button type="button" class="btn btn-outline-success"><a href="{{ route('funder.create') }}">Tambah Donatur</a></button>
                      <button type="button" class="btn btn-success mx-2"><i class="fas fa-search mr-2"></i>Search</button>
                  </div>
                  <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date of birth</th>
                    <th>Place of birth</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Notes</th>
                  </tr>
                  @foreach($data_funder as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>                
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->date_of_birth }}</td>
                    <td>{{ $data->place_of_birth }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->email }} </td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->notes }}</td>
                    <td>
                        <form action="{{ route('funder.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                                DELETE
                            </button>
                        </form>
                        <form action="{{ route('funder.edit', $data->id) }}" method="POST">
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