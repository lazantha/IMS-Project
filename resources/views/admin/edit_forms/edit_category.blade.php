@extends('templates.master')
@section('Edit Category')
@section('content')

<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-0">
       @include('admin.base')
      </div>
      <div class="col">
        <div class="container mt-4">
            <h1 class="text-center">Update Category</h1>
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Add Category
                        </div>
                        <div class="card-body">
                            <form action="{{ route('update_category', ['cat_id' => $cat_id]) }}" method="POST">
 
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="categoryName">Category Name</label>
                                    <input type="text" value="{{$data->category_name}}"  name="categoryName" class="form-control" id="categoryName" name="categoryName" placeholder="Enter category name(Consumable/Capital..)" required>
                                </div>
                                <div class="form-group">
                                    <label for="categoryCode">Category Code</label>
                                    <input type="text" value="{{$data->category_code}}" name="categoryCode" class="form-control" id="categoryCode" name="categoryCode" placeholder="Enter category code" required>
                                </div>
                                <div class="form-group">
                                    <label for="isActive">Status</label>
                                    <select class="form-control" id="isActive" name="isActive">
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
        
                    <!-- Categories Table -->
                   
                </div>
            </div>
        </div>
      </div>
  </div>

@endsection

