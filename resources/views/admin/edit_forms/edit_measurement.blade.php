@extends('templates.master')
@section('Edit Measurement')
@section('content')


<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-2">
       @include('admin.base')
      </div>
      <div class="col">
        <div class="p-2 flex-fill">
            <div class="container mt-4">
                <h1 class="text-center">Update Measurement</h1>
                <div class="row mt-4">
                    <div class="col-md-8 offset-md-2">
                        <div class="card">

                            <div class="card-body">
                                <form action="{{ route('update_measurement',['measure_id'=>$measure_id]) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <div class="form-group">
                                        <label for="measurementName">Measurement Name</label>
                                        <input type="text" class="form-control @error('measurementName') is-invalid @enderror" id="measurementName" name="measurementName" placeholder="Enter measurement name" required value="{{$measurement->name}}">
                                        @error('measurementName')
                                        <div class="invalid-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
    
                                    <div class="form-group">
                                        <label for="measurementCode">Measurement Code</label>
                                        <input type="text" class="form-control @error('measurementCode') is-invalid @enderror" id="measurementCode" name="measurementCode" placeholder="Enter measurement code" required value="{{$measurement->code}}">
                                        @error('measurementCode')
                                        <div class="invalid-feedback" style="color: red;">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
    
                                    <div class="form-group">
                                        <label for="isActive">Status</label>
                                        <select class="form-control" id="isActive" name="isActive">
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
    
                                    <button type="submit" class="btn btn-primary">Update Measurement</button>
                                </form>
    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
        
      </div>
      
    </div>

  </div>
@endsection

