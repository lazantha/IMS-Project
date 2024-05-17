@extends('templates.master')
@section('title')
@section('content')

<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-0">
       @include('admin.base')
      </div>
      <div class="col">
        <div class="container mt-4">
            <h1 class="text-center">Manage Categories</h1>
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Add Category
                        </div>
                        <div class="card-body">
                            <form action="{{route('postCategories')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="categoryName">Category Name</label>
                                    <input type="text" name="categoryName" class="form-control" id="categoryName" name="categoryName" placeholder="Enter category name(Consumable/Capital..)" required>
                                </div>
                                <div class="form-group">
                                    <label for="categoryCode">Category Code</label>
                                    <input type="text" name="categoryCode" class="form-control" id="categoryCode" name="categoryCode" placeholder="Enter category code" required>
                                </div>
                                <div class="form-group">
                                    <label for="isActive">Status</label>
                                    <select class="form-control" id="isActive" name="isActive">
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                            </form>
                        </div>
                    </div>
        
                    <!-- Categories Table -->
                    <div class="card mt-4">
                        <div class="card-header">
                            Categories
                        </div>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                        <th>Category Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{$category->cat_id}}</td>
                                        <td>{{$category->category_name}}</td>
                                        <td>{{$category->category_code}}</td>
                                        <td>{{$category->is_active ? 'Active' : 'Inactive'}}</td>
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

@endsection

