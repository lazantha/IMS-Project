@extends('templates.master')
@section('Department Grid')
@section('content')


<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-2">
       @include('admin.base')
      </div>
      <div class="col">
        <div class="p-2 flex-fill">
            <div class="container mt-4">
                <div class="row mt-4">
                    <div class="col-md-8 offset-md-2">
                        <!-- Departments Table -->
                        <div class="card mt-4 shadow">
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
                                                <a href="{{route('edit_department',$department->dep_id)}}" class="text-primary">Edit</a>
                                                <a href="{{route('delete_department',$department->dep_id)}}" class="text-danger">Delete</a>
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

