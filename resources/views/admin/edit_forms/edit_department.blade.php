@extends('templates.master')
@section('Edit Department')
@section('content')


<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-2">
       @include('admin.base')
      </div>
      <div class="col">
        <div class="p-2 flex-fill">
            <div class="container mt-4">
                <h1 class="text-center">Update Departments</h1>
                <div class="row mt-4">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form id="addDepartmentForm" action="{{ route('update_department', ['dep_id' => $dep_id]) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="departmentName">Department Name</label>
                                        <input type="text" value="{{$department->department}}" class="form-control" id="departmentName" name="departmentName" placeholder="Enter department name" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Department</button>
                                </form>
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

