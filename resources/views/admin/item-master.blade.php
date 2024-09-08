@extends('templates.master')
@section('title')
@section('content')


<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-2">
        @include('admin.base')
      </div>
      <div class="col-sm-8">
        <div class="container w-auto p-3">
            <h1 class="text-center">Add An Item </h1>
            <div class="row mt-4">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                
                        <div class="card-body shadow">
                          <form action="{{ route('post_item_master') }}" method="POST">
    @csrf

    <!-- Item Name -->
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="itemName">Item Name</label>
                <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Enter item name" required>
                @error('itemName')
                    <div class="error-message" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Item Code -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="itemCode">Item Code</label>
                <input type="text" class="form-control" id="itemCode" name="itemCode" placeholder="Enter item code" required>
                @error('itemCode')
                    <div class="error-message" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <!-- Quantity -->
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required min="1">
                @error('quantity')
                    <div class="error-message" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Manufacturer -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="manufacturer">Manufacturer</label>
                <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Enter manufacturer" required value="Unknown">
                @error('manufacturer')
                    <div class="error-message" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <!-- Item Type -->
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="itemType">Item Type</label>
                <select class="form-control" id="itemType" name="itemType" required>
                    @foreach ($item_types as $item_type)
                        <option value="{{ $item_type->type_name }}">{{ $item_type->type_name }}</option> 
                    @endforeach
                </select>
                @error('itemType')
                    <div class="error-message" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Measurement -->
        <div class="col-md-6">
            <div class="form-group">
                <label for="measurement">Measurement</label>
                <select class="form-control" id="measurement" name="measurement" required>
                    @foreach ($measurement_codes as $measurement_code )
                        <option value="{{ $measurement_code->code }}">{{ $measurement_code->code }}</option>
                    @endforeach
                </select>
                @error('measurement')
                    <div class="error-message" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <!-- Department -->
    <div class="form-row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="department">Department</label>
                <select class="form-control" id="department" name="department" required>
                    @foreach ($departments as $department)
                        <option value="{{ $department->department }}">{{ $department->department }}</option>
                    @endforeach
                </select>
                @error('department')
                    <div class="error-message" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <!-- Is Disposable and Is Active -->
        <div class="col-md-6">
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="isDisposable" name="isDisposable" value="1">
                    <label class="form-check-label" for="isDisposable">Disposable</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="isActive" name="isActive" value="1">
                    <label class="form-check-label" for="isActive">Active</label>
                </div>
                @error('isDisposable')
                    <div class="error-message" style="color:red;">{{ $message }}</div>
                @enderror
                @error('isActive')
                    <div class="error-message" style="color:red;">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="form-group">
        <a href="javascript:history.back()" class="btn btn-secondary">Back</a>

        <button type="submit" class="btn btn-primary">Add Item</button>
        <a href="{{route('admin-main_master-grid')}}" class="btn btn-success">View Items</a>
    </div>
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

