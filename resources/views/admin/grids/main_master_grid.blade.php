
@extends('templates.master')
@section('Item Grid')
@section('content')


<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-2">
        @include('admin.base')
      </div>
      <div class="col-sm-8">
        <div class="container w-auto p-3">
            <h1 class="text-center">Manage Item Master</h1>
            <div class="row mt-4">
                <div class="col-md-10 offset-md-1">
                    <!-- Item Master Table -->
                    <div class="card mt-4">
                        <div class="card-header">
                            Item Master
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Item Name</th>
                                        <th>Item Code</th>
                                        <th>Quantity</th>
                                        <th>Manufacturer</th>
                                        <th>Item Type</th>
                                        <th>Measurement</th>
                                        <th>Department</th>
                                        <th>Disposable</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Loop through item master records and display here -->

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

