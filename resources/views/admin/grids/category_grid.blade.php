@extends('templates.master')
@section('Category Grid')
@section('content')

<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-0">
       @include('admin.base')
      </div>
      <div class="col">
        <div class="container mt-4">
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2">
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
                                            <a href="{{route('edit_category',$category->cat_id)}}" class="text-primary">Edit</a>
                                            
                                            <a href="{{route('delete_category',$category->cat_id)}}" class="text-danger">Delete</a>
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

