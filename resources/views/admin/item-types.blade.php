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
                           <form action="{{ route('post_item_types') }}" method="POST">
                            @csrf

                            <!-- Type Name Field -->
                            <div class="form-group">
                                <label for="typeName">Type Name</label>
                                <input type="text" class="form-control @error('typeName') is-invalid @enderror" id="typeName" name="typeName" placeholder="Enter type name" value="{{ old('typeName') }}" required>
                                @error('typeName')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Type Code Field -->
                            <div class="form-group">
                                <label for="typeCode">Type Code</label>
                                <input type="text" class="form-control @error('typeCode') is-invalid @enderror" id="typeCode" name="typeCode" placeholder="Enter type code" value="{{ old('typeCode') }}" required>
                                @error('typeCode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Category Field -->
                            <div class="form-group">
                                <label for="category">Category</label>
                                <select class="form-control @error('category') is-invalid @enderror" id="category" name="category" required>
                                    @foreach ($item_categories as $category)
                                        <option value="{{ $category->category_name }}" {{ old('category') == $category->category_name ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Status Field -->
                            <div class="form-group">
                                <label for="isActive">Status</label>
                                <select class="form-control @error('isActive') is-invalid @enderror" id="isActive" name="isActive">
                                    <option value="1" {{ old('isActive') == '1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('isActive') == '0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('isActive')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Add Item Type</button>
                            <a href="{{route('admin-measurements')}}" class="btn btn-success">Next</a>
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
