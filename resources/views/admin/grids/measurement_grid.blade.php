@extends('templates.master')
@section('Measurement Grid')
@section('content')


<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-2s">
        @include('admin.base')
      </div>
      <div class="col">
        <div class="container mt-4">
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2">
        
                    <div class="card mt-4">
                        <div class="card-header">
                            Measurements
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Measurement Name</th>
                                        <th>Measurement Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop through measurements and display here -->
                                    <tr>
                                        <td>1</td>
                                        <td>Meter</td>
                                        <td>m</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-info">Edit</a>
                                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                                        </td>
                                    </tr>
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
@endsection
