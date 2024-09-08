@extends('templates.master')
@section('title')
@section('content')

<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-0">
       @include('admin.base')
      </div>
      <div class="col">
        <div class="container mt-4 ">
            <h1 class="text-center">Make Categories</h1>
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Add Category
                        </div>
                        <div class="card-body shadow">
                            <form action="{{route('postCategories')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="categoryName">Category Name</label>
                                    <input type="text" name="categoryName" class="form-control" id="categoryName" name="categoryName" placeholder="Enter category name(Consumable/Capital..)" required>
                                      @error('categoryName')
                                    <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="categoryCode">Category Code</label>
                                    <input type="text" name="categoryCode" class="form-control" id="categoryCode" name="categoryCode" placeholder="Enter category code" required>
                                     @error('categoryCode')
                                    <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="isActive">Status</label>
                                    <select class="form-control" id="isActive" name="isActive">
                                        <option value="1" selected>Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                     @error('isActive')
                                    <div class="error-message" style="color:red;">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Add Category</button>
                                <a href="{{route('admin-departments')}}" class="btn btn-success">Next</a>
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

