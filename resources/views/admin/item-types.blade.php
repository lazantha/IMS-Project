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
            <h1 class="text-center">Make Item Types</h1>
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-body shadow">
                            <form action="{{route('post_item_types')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="typeName">Type Name</label>
                                    <input type="text"  class="form-control" id="typeName" name="typeName" placeholder="Enter type name" required>
                                     @error('typeName')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label for="typeCode">Type Code</label>
                                    <input type="text" class="form-control" id="typeCode" name="typeCode" placeholder="Enter type code" required>
                                     @error('typeCode')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
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
                                      @error('isActive')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Add Item Type</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
     
    </div>
  </div>

@endsection
