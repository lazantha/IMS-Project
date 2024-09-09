@extends('templates.master')
@section('title', 'Category Grid')
@section('content')

<div class="container text-center">
    <div class="row">
        <div class="col-md-3 mt-4 ms-0">
            @include('admin.base')
        </div>
        <div class="col">
            <div class="container mt-4">
                <div class="row mt-4">
                    <div class="col-md-10 offset-md-1">
                        <!-- Categories Table -->
                        <div class="card shadow-sm border-light">
                            <div class="card-header bg-success text-white">
                                <h5 class="mb-0">Categories</h5>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered table-striped mb-0">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>ID</th>
                                                <th>Category Name</th>
                                                <th>Category Code</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $category)
                                                <tr>
                                                    <td>{{ $category->cat_id }}</td>
                                                    <td>{{ $category->category_name }}</td>
                                                    <td>{{ $category->category_code }}</td>
                                                    <td>
                                                        <span class="badge {{ $category->is_active ? 'bg-success' : 'bg-secondary' }}">
                                                            {{ $category->is_active ? 'Active' : 'Inactive' }}
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('edit_category', $category->cat_id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                        <a href="{{ route('delete_category', $category->cat_id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
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
