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
                                        <th>Is Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($measurements as $measurement )
                                            <tr>
                                                <td>{{$measurement->measurement_id}}</td>
                                                <td>{{$measurement->name}}</td>
                                                <td>{{$measurement->code}}</td>
                                                <td>{{$measurement->is_active ? 'Yes' : 'No' }}</td>
                                                <td>
                                                    <a href="#" class="text-primary">Edit</a>
                                                    <a href="#" class="text-danger">Delete</a>
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
@endsection
