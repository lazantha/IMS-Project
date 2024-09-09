@extends('templates.master')
@section('title', 'Types Grid')
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
                        <!-- Item Types Table -->
                        <div class="card shadow-sm border-light">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0">Item Types</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-striped mb-0">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Type Name</th>
                                                <th>Type Code</th>
                                                <th>Is Active</th>
                                                <th>Category</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($itemTypes as $itemType)
                                                <tr>
                                                    <td>{{ $itemType->type_id }}</td>
                                                    <td>{{ $itemType->type_name }}</td>
                                                    <td>{{ $itemType->type_code }}</td>
                                                    <td>
                                                        <span class="badge {{ $itemType->is_active ? 'bg-success' : 'bg-secondary' }}">
                                                            {{ $itemType->is_active ? 'Yes' : 'No' }}
                                                        </span>
                                                    </td>
                                                    <td>{{ $itemType->category_name }}</td>
                                                    <td>
                                                        <a href="{{ route('edit_types', $itemType->type_id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                        <a href="{{ route('delete_type', $itemType->type_id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
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
