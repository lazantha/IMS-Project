@extends('templates.master')
@section('title')
@section('content')


<div class="container text-center">
    <div class="row">
      <div class="col-md-3 mt-4 ms-2s">
        @include('admin.base')
      </div>
      <div class="col">
        <div class="container mt-4">
            <h1 class="text-center">Set Measurements Values</h1>
            <div class="row mt-4">
                <div class="col-md-8 offset-md-2">
                    <div class="card">
                        <div class="card-body shadow">
                           <form action="{{ route('post_measurements') }}" method="POST">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="measurementName">Measurement Name</label>
                                    <input type="text" class="form-control @error('measurementName') is-invalid @enderror" id="measurementName" name="measurementName" placeholder="Enter measurement name" required>
                                    @error('measurementName')
                                    <div class="invalid-feedback" style="color: red;">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="measurementCode">Measurement Code</label>
                                    <input type="text" class="form-control @error('measurementCode') is-invalid @enderror" id="measurementCode" name="measurementCode" placeholder="Enter measurement code" required>
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

                                <button type="submit" class="btn btn-primary">Add Measurement</button>
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
@endsection
