@extends('templates.master')
@section('Types Grid')
@section('content')


<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-2">
        @include('admin.base')
      </div>
      <div class="col">
        <div class="container mt-4">
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2">
                    <!-- Item Types Table -->
                    <div class="card mt-4">
                        <div class="card-header">
                            Item Types
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Type Name</th>
                                        <th>Type Code</th>
                                        <th>Status</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop through item types and display here -->
                                    
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
