@extends('templates.master')
@section('title', 'Admins')
@section('content')
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3 mt-4 ms-2">
                @include('admin.base')
            </div>

            <div class="col">
                <div class="container mt-4">
                    <h1 class="text-center mb-4">Active Admins</h1>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <!-- Admins Table -->
                            <div class="card shadow-sm border-light">
                                <div class="card-header bg-primary text-white">
                                    <h5 class="mb-0">Admins</h5>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>ID</th>
                                                    <th>First Name</th>
                                                    <th>Last Name</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Loop through admin records and display here -->
                                                @foreach ($admins as $admin)
                                                    <tr>
                                                        <td>{{ $admin->admin_id }}</td>
                                                        <td>{{ $admin->first_name }}</td>
                                                        <td>{{ $admin->last_name }}</td>
                                                        <td>{{ $admin->email }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <!-- Other Tables: Categories, Departments, Item Master, Item Types, Measurements -->
                            <!-- Similar structure as above, modify as needed -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
