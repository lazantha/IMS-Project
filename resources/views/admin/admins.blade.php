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
                <h1 class="text-center">Active Admins</h1>
                <div class="row mt-4">
                    
                    <div class="col-md-9">
                        <!-- Admins Table -->
                        <div class="card">
                            <div class="card-header">
                                Admins
                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Loop through admin records and display here -->
                                        @foreach ($admins as $admin )
                                            <tr>
                                                <td>{{$admin->admin_id}}</td>
                                                <td>{{$admin->first_name}}</td>
                                                <td>{{$admin->last_name}}</td>
                                                <td>{{$admin->email}}</td>
                                            </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
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

