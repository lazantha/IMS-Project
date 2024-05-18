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
            <h1 class="text-center">Manage Item Master</h1>
            <div class="row mt-4">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                            Add Item
                        </div>
                        <div class="card-body">
                            <form action="{{route('post_item_master')}}" method="POST">
                                @csrf
                                
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="itemName" name="itemName" placeholder="Enter item name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" id="itemCode" name="itemCode" placeholder="Enter item code" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="Enter quantity" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" id="manufacturer" name="manufacturer" placeholder="Enter manufacturer" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="" class="form-control">Enter Item Type</label>
                                        <div class="form-group">
                                            
                                            <select class="form-control" id="itemType" name="itemType" required >
                                                @foreach ($item_types as $item_type)
                                                <option value="{{ $item_type->type_name }}">{{ $item_type->type_name }}</option> 
                                                @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="" class="form-control">Enter Measurement</label>
                                            <select class="form-control" id="measurement" name="measurement" required>
                                                @foreach ($measurement_codes as $measurement_code )
                                                <option value="{{ $measurement_code->code}}">{{$measurement_code->code}}</option>
                                                    
                                                @endforeach
                                                
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <label for="" class="form-control ms-0 ps-0"> Enter Department</label>
                                        <div class="form-group">
                                            <select class="form-control" id="department" name="department" required>
                                                @foreach ($departments as $department )
                                                    
                                                <option value="{{$department->department}}">{{$department->department}}</option>
                                                
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" style="background-color: purple" type="checkbox" id="isDisposable" name="isDisposable" value="1">
                                                <label class="form-check-label" for="isDisposable">Disposable</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" style="background-color: purple" type="checkbox" id="isActive" name="isActive" value="1">
                                                <label class="form-check-label" for="isActive">Active</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add Item</button>
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

