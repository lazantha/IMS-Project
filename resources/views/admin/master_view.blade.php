@extends('templates.master')
@section('master view')
@section('content')

<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-0">
       @include('admin.base')
      </div>
      <div class="col">
        <div class="container mt-5">
          <div class="card">
              <div class="card-header">
                  <h2 class="fs-2 fw-bold">Welcome to Inventory Management System </h2>
              </div>
              <div class="card-body shadow">
                  <h4>Step-by-Step Guide</h4>
                  <p>Welcome to our Inventory Management System. Follow the steps below to get started:</p>
                  <ol>
                      <li>
                          <h5>Update Categories</h5>
                          <p>Start by adding categories for your items. This helps in organizing your inventory better.</p>
                      </li>
                      <li>
                          <h5>Update Departments</h5>
                          <p>Add the departments in your organization that will use the inventory. This helps in managing items department-wise.</p>
                      </li>
                      <li>
                          <h5>Update Item Types</h5>
                          <p>Define different types of items. For example, electronics, furniture, stationery, etc.</p>
                      </li>
                      <li>
                          <h5>Update Measurements</h5>
                          <p>Specify the measurement units for your items such as pieces, kilograms, liters, etc.</p>
                      </li>
                      <li>
                          <h5>Update Main Item Master</h5>
                          <p>After setting up the above details, you can start adding the main items to the inventory.</p>
                      </li>
                  </ol>
                  <a href="{{ route('admin-categories') }}" class="btn btn-primary">Get Started</a>
              </div>
          </div>
      </div>
      </div>
  </div>

@endsection

