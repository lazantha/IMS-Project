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
            <h1 class="text-center">Update An Item </h1>
            <div class="row mt-4">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                
                        <div class="card-body">
                            <form action="{{route('update_item',['item_id'=>$item_id])}}" method="POST">
                                @method('PUT')
                                @csrf
                                
                                <div class="form-row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="itemName" name="itemName" value="{{$item->item}}"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" id="itemCode" name="itemCode" value="{{$item->item_code}}" required>
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
                                            
                                            <input type="text" class="form-control" id="manufacturer" name="manufacturer" value="{{$item->manufacturer}}" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" style="background-color: purple" type="checkbox" id="isDisposable" name="isDisposable" {{ $item->is_disposable ? 'checked' : '' }}>
                                                <label class="form-check-label" for="isDisposable">Disposable</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" style="background-color: purple" type="checkbox" id="isActive" name="isActive" {{ $item->is_active ? 'checked' : '' }}>
                                                <label class="form-check-label" for="isActive">Active</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Update Item</button>
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

