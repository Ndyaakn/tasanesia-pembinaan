@extends('layouts.default')

@section('title', 'Project')

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
                       <h1 style="color:green">Data Project</h1>
                  </div>
                  <div class="col-3">          
                      <button type="button" class="btn btn-outline-success"><a href="{{ route('project.create') }}">Tambah Project</a></button>
                      <button type="button" class="btn btn-success mx-2"><i class="fas fa-search mr-2"></i>Search</button>
                  </div>
                  <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Project name</th>
                    <th>Pm name</th>
                    <th>Pm phone</th>
                    <th>Pm email</th>
                    <th>Main location</th>
                    <th>Start date</th>
                    <th>Description</th>
                    <th>Total amount</th>
                    <th>Amount</th>
                    <th>Document 1</th>
                    <th>Document 2</th>
                    <th>Notes</th>
                   
                  </tr>
                  @foreach($data_project as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>                
                    <td>{{ $data->project_name }}</td>
                    <td>{{ $data->pm_name }}</td>
                    <td>{{ $data->pm_phone }}</td>
                    <td>{{ $data->pm_email }}</td>
                    <td>{{ $data->main_location }} </td>
                    <td>{{ $data->start_date }}</td>
                    <td>{{ $data->description }}</td>
                    <td>{{ $data->total_amount }}</td>
                    <td>{{ $data->amount }}</td>
                    <td>{{ $data->document_1 }}</td>          
                    <td>{{ $data->document_2 }}</td>    
                    <td>{{ $data->notes }}</td>
                    <td>
                        <form action="{{ route('project.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                                DELETE
                            </button>
                        </form>
                        <form action="{{ route('project.edit', $data->id) }}" method="POST">
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