@extends('templates.master')
@section('title')
@section('content')


<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-2">
       @include('admin.base')
      </div>
      <div class="col">
        <div class="p-2 flex-fill">
            <div class="container mt-4">
                <h1 class="text-center">Manage Departments</h1>
                <div class="row mt-4">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">
                            <div class="card-header">
                                Add Department
                            </div>
                            <div class="card-body">
                                <form id="addDepartmentForm" action="{{route('setDepartments')}}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="departmentName">Department Name</label>
                                        <input type="text" class="form-control" id="departmentName" name="departmentName" placeholder="Enter department name" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Department</button>
                                </form>
                            </div>
                        </div>
        
                        <!-- Departments Table -->
                        <div class="card mt-4">
                            <div class="card-header">
                                Departments
                            </div>
                            <div class="card-body table-wrapper-scroll-y my-custom-scrollbar">
                                <table class="table table-hover table-bordered table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Department Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody style="max-height: 300px; overflow-y: auto;">
                                        <!-- Loop through departments and display here -->
                                        @foreach ($departments as $department)
                                        <tr>
                                            <td>{{$department->dep_id}}</td>
                                            <td>{{$department->department}}</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info">Edit</a>
                                                <a href="#" class="btn btn-sm btn-danger">Delete</a>
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

