@extends('layouts.default')

@section('title', 'Coach')

@section('content')

<div class="card">
    <div class="card-body">
        <a href="{{ route('coach.create') }}" class="btn btn-primary mb-3">
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
                    <td>
                        {{ $loop->iteration }}
                    </td>
                    <td>
                        {{ $data->name }}
                    </td>
                    <td>
                        {{ $data->degree }}
                    </td>
                    <td>
                        {{ $data->school }}
                    </td>
                    <td>
                        {{ $data->faculty }}
                    </td>
                    <td>
                        {{ $data->major }}
                    </td>
                    <td>
                        {{ $data->organization }}
                    </td>
                    <td>
                        {{ $data->position_in_org }}
                    </td>
                    <td>
                        {{ $data->project_name }}
                    </td>
                    <td>
                        {{ $data->position_in_project }}
                    </td>
                    <td>
                        {{ $data->skill }}
                    </td>
                    <td>
                        {{ $data->notes }}
                    </td>
                    <td>
                        <form action="{{ route('coach.destroy', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure for delete this data?')">
                                DELETE
                            </button>
                        </form>
                    </td>
                </tr>
            </tbody>
            @endforeach

        </table>
    </div>
</div>

@endsection