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
                <h1 class="text-center">Add Departments</h1>
                <div class="row mt-4">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">

                            <div class="card-body shadow">
                               <form id="addDepartmentForm" action="{{ route('setDepartments') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <label for="departmentName">Department Name</label>
                                            <input type="text" class="form-control @error('departmentName') is-invalid @enderror" 
                                                   id="departmentName" name="departmentName" placeholder="Enter department name" required>
                                                   
                                            @error('departmentName')
                                            <div class="invalid-feedback" style="color:red;">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Department</button>
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

