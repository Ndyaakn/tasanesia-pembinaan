@extends('layouts.default')

@section('title', 'Nurseries')

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
                       <h1 style="color:green">Data Petani</h1>
                  </div>
                  <div class="col-3">          
                      <button type="button" class="btn btn-outline-success"><a href="{{ route('nurseries.create') }}">Tambah Petani</a></button>
                      <button type="button" class="btn btn-success mx-2"><i class="fas fa-search mr-2"></i>Search</button>
                  </div>
                  <table class="table">
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Kepala Perusahaan</th>
                    <th>Alamat</th>
                    <th>No. Handphone</th>
                    <th>Email</th>
                    <th>Fax</th>
                    <th>Web</th>
                    <th>No. Rekening Bank</th>
                    <th>Area</th>
                    <th>Omset perbulan</th>
                    <th>Total Kapasitas</th>
                    <th>Jumlah karyawan tetap</th>
                    <th>Jumlah karyawan tidak tetap</th>
                    <th>Potensi</th>
                    <th>Luas tanah yang ada</th>
                    <th>Perkembangan tanah</th>
                    <th>Keterangan</th>
                    <th>Is Verified</th>
                   
                  </tr>
                  @foreach($data_nurseries as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>                
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->head_of_company }}</td>
                    <td>{{ $data->address }}</td>
                    <td>{{ $data->phone }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->fax }}</td>
                    <td>{{ $data->web }}</td>                             
                    <td>{{ $data->bank_accountno }}</td>
                    <td>{{ $data->area }}</td>
                    <td>{{ $data->monthly_omzet }}</td>          
                    <td>{{ $data->total_capacity }}</td>
                    <td>{{ $data->permanent_emp }}</td>         
                    <td>{{ $data->non_permanent_emp }}</td>
                    <td>{{ $data->potency }}</td>          
                    <td>{{ $data->is_verified }}</td>         
                    <td>{{ $data->existing_land }}</td>
                    <td>{{ $data->developing_land }}</td>         
                    <td>{{ $data->notes }}</td>
                    <td>
                        <form action="{{ route('nurseries.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                                DELETE
                            </button>
                        </form>
                        <form action="{{ route('nurseries.edit', $data->id) }}" method="POST">
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