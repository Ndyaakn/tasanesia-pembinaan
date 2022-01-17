@extends('layouts.default')

@section('title', 'Funder_Project')

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
                  <div class="col-4">
                       <h1 style="color:green">Data FunderProject</h1>
                  </div>
                  <div class="col-4">          
                      <button type="button" class="btn btn-outline-success"><a href="{{ route('funder_project.create') }}">Tambah FunderProject</a></button>
                      <button type="button" class="btn btn-success mx-2"><i class="fas fa-search mr-2"></i>Search</button>
                  </div>
                  <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Total Fund</th>
                    <th>Benefit</th>
                    <th>Fixfund</th>
                    <th>Permanent Fund</th>
                    <th>Temporary Fund</th>
                    <th>Count Temporary Fund</th>
                    <th>Notes</th>
                  </tr>
                  @foreach($data_funder_project as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>                
                    <td>{{ $data->total_fund }}</td>
                    <td>{{ $data->benefit }}</td>
                    <td>{{ $data->fixfund }}</td>
                    <td>{{ $data->permanent_fund }}</td>
                    <td>{{ $data->temporary_fund }} </td>
                    <td>{{ $data->count_temporary_fund }}</td>
                    <td>{{ $data->notes }}</td>
                    <td>
                        <form action="{{ route('funder_project.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                                DELETE
                            </button>
                        </form>
                        <form action="{{ route('funder_project.edit', $data->id) }}" method="POST">
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