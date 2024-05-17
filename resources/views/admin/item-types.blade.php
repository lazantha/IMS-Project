@extends('templates.master')
@section('title')
@section('content')


<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-2">
        @include('admin.base')
      </div>
      <div class="col">
        <div class="container mt-4">
            <h1 class="text-center">Manage Item Types</h1>
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Add Item Type
                        </div>
                        <div class="card-body">
                            <form action="{{route('post_item_types')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="typeName">Type Name</label>
                                    <input type="text"  class="form-control" id="typeName" name="typeName" placeholder="Enter type name" required>
                                </div>
                                <div class="form-group">
                                    <label for="typeCode">Type Code</label>
                                    <input type="text" class="form-control" id="typeCode" name="typeCode" placeholder="Enter type code" required>
                                </div>

                                <div class="form-group">
                                    <label for="typeCode">Category</label>
                                    <select class="form-control" id="categoryt" name="category" required>
                                        @foreach ($item_categories as $categories )

                                            <option value="{{$categories->category_name}}">{{$categories->category_name}}</option>    

                                        @endforeach   
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="isActive">Status</label>
                                    <select class="form-control" id="isActive" name="isActive">
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Item Type</button>
                            </form>
                        </div>
                    </div>
        
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
                                    <tr>
                                        <td>1</td>
                                        <td>Stationary</td>
                                        <td>ST001</td>
                                        <td>Active</td>
                                        <td>Consumable</td>
                                        
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
