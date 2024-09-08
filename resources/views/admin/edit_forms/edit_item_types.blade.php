@extends('templates.master')
@section('Edit Item Types')
@section('content')

<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-0">
       @include('admin.base')
      </div>
      <div class="col">
        <div class="container mt-4">
            <h1 class="text-center">Update Item Types</h1>
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-header">
                            Add Item Types
                        </div>

                        <div class="card-body">
                            <form action="{{ route('update_item_types', ['type_id' => $type_id]) }}" method="POST">
 
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                <label for="typeName">Type Name</label>
                                <input type="text" class="form-control @error('typeName') is-invalid @enderror" id="typeName" name="typeName" placeholder="Enter type name" value="{{ $item_types->type_name }}" required>
                                @error('typeName')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                                <div class="form-group">
                                <label for="typeCode">Type Code</label>
                                <input type="text" class="form-control @error('typeCode') is-invalid @enderror" id="typeCode" name="typeCode" placeholder="Enter type code" value="{{ $item_types->type_code }}" required>
                                @error('typeCode')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
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

