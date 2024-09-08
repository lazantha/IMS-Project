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
                    <div class="card mt-4 shadow">
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
                                        <th>Is Active</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($itemTypes as $itemType)
                                    <tr>
                                        <td>{{ $itemType->type_id }}</td>
                                        <td>{{ $itemType->type_name }}</td>
                                        <td>{{ $itemType->type_code }}</td>
                                        <td>{{ $itemType->is_active ? 'Yes' : 'No' }}</td>
                                        <td>{{ $itemType->category_name }}</td>
                                        <td>
                                            <a href="{{ route('edit_types', $itemType->type_id) }}" class="text-primary">Edit</a>
                                            <a href="{{route('delete_type',$itemType->type_id)}}" class="text-danger ">Delete</a>
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
