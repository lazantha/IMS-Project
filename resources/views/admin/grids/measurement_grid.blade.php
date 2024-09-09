@extends('templates.master')
@section('title', 'Measurement Grid')
@section('content')

<div class="container text-center">
    <div class="row">
        <div class="col-md-3 mt-4 ms-2">
            @include('admin.base')
        </div>
        <div class="col">
            <div class="container mt-4">
                <div class="row mt-4">
                    <div class="col-md-10 offset-md-1">
                        <!-- Measurements Table -->
                        <div class="card shadow-sm border-light">
                            <div class="card-header bg-info text-white">
                                <h5 class="mb-0">Measurements</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-striped mb-0">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Measurement Name</th>
                                                <th>Measurement Code</th>
                                                <th>Is Active</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($measurements as $measurement)
                                                <tr>
                                                    <td>{{ $measurement->measurement_id }}</td>
                                                    <td>{{ $measurement->name }}</td>
                                                    <td>{{ $measurement->code }}</td>
                                                    <td>
                                                        <span class="badge {{ $measurement->is_active ? 'bg-success' : 'bg-secondary' }}">
                                                            {{ $measurement->is_active ? 'Yes' : 'No' }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('edit_measurement', $measurement->measurement_id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                        <a href="{{ route('delete_measurement', $measurement->measurement_id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
