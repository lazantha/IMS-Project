@extends('templates.master')
@section('Category Grid')
@section('content')

<a href="{{route('master_view')}}" class="ms-5 mt-5 btn btn-primary btn-sm">Back</a> | <a href="" class="btn btn-info btn-sm mt-5">Print</a>
<div class="container text-center shadow">
    <div class="row">
      <div class="col-md-3 mt-4 ms-0">
       {{-- @include('admin.base') --}}
      </div>
      <div class="col">
        <div class="container mt-4">
            <h5 >Inventory Summary Report</h5 >
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Item</th>
                    <th>Type</th>
                    <th>Quantity</th>
                    <th>Measurement</th>
                    <th>Department</th>
                    <th>Manufacturer</th>
                    <th>Active</th>
                    <th>Disposable</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventorySummary as $item)
                    <tr>
                        <td>{{ $item->item_master_id }}</td>
                        <td>{{ $item->item }}</td>
                        <td>{{ $item->type_name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->measurement }}</td>
                        <td>{{ $item->department }}</td>
                        <td>{{ $item->manufacturer }}</td>
                        <td>{{ $item->is_active ? 'Yes' : 'No' }}</td>
                        <td>{{ $item->is_disposable ? 'Yes' : 'No' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- DepartmentWise --}}
        <br>
        <h5 >Department Wise Sum Up</h5 >

        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th>Department</th>
                    <th>Total Quantity</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ( $departmentWiseInventory as $items )
                <tr>
                    <td>{{$items->department}}</td>
                    <td>{{$items->total_quantity}}</td>
                    
                </tr>
                    
                @endforeach
            </tbody>
          </table>
        <br>
           {{-- categoryWise --}}
           <h5 >Category Wise Sum Up</h5 >

        <table class="table table-striped-columns">
            <thead>
                <tr>
                    <th>Category</th>
                    <th>Total Quantity</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ( $categoryWiseInventory as $items )
                <tr>
                    <td>{{$items->category_name}}</td>
                    <td>{{$items->total_quantity}}</td>
                    
                </tr>
                    
                @endforeach
            </tbody>
          </table>
        <br>
     {{-- itemTypeActivity --}}
          <h5 >Item Type Activity</h5 >
          {{-- item_types.type_id', 'item_types.type_code', 'item_types.type_name', 'item_types.is_active', 'categories.category_name
           --}}
          <table class="table table-striped table-hover">
            <tbody>
                <tr>
                    <th>Id</th>
                    <th>Code</th>
                    <th>Name</th>
                    <th>Activity</th>
                    <th>Category Name</th>       
                </tr>
                <tbody>
                    @foreach ($itemTypeActivity as $activity )
                    <tr>
                    <td>{{ $activity->type_id }}</td>
                    <td>{{ $activity->type_code }}</td>
                    <td>{{ $activity->type_name }}</td>
                    <td>{{ $activity->is_active ? 'Yes' : 'No' }}</td>
                    <td>{{ $activity->category_name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </tbody>
          </table>
         <br>
         <h5>Disposable Items Report</h5>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Item ID</th>
                <th>Item Name</th>
                <th>Item Code</th>
                <th>Quantity</th>
                <th>Manufacturer</th>
                <th>Type Name</th>
                <th>Measurement</th>
                <th>Department</th>
                <th>Is Active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disposableItems as $item)
                <tr>
                    <td>{{ $item->item_master_id }}</td>
                    <td>{{ $item->item }}</td>
                    <td>{{ $item->item_code }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->manufacturer }}</td>
                    <td>{{ $item->type_name }}</td>
                    <td>{{ $item->measurement }}</td>
                    <td>{{ $item->department }}</td>
                    <td>{{ $item->is_active ? 'Yes' : 'No' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
          <br>
          <h5>Detailed Items Report</h5>
          <table class="table table-bordered">
              <thead>
                  <tr>
                      <th>Item ID</th>
                      <th>Item Name</th>
                      <th>Item Code</th>
                      <th>Quantity</th>
                      <th>Manufacturer</th>
                      <th>Type Name</th>
                      <th>Measurement</th>
                      <th>Department</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Is Disposable</th>
                      <th>Is Active</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($detailedItems as $item)
                      <tr>
                          <td>{{ $item->item_master_id }}</td>
                          <td>{{ $item->item }}</td>
                          <td>{{ $item->item_code }}</td>
                          <td>{{ $item->quantity }}</td>
                          <td>{{ $item->manufacturer }}</td>
                          <td>{{ $item->type_name }}</td>
                          <td>{{ $item->measurement }}</td>
                          <td>{{ $item->department }}</td>
                          <td>{{ $item->first_name }}</td>
                          <td>{{ $item->last_name }}</td>
                          <td>{{ $item->is_disposable ? 'Yes' : 'No' }}</td>
                          <td>{{ $item->is_active ? 'Yes' : 'No' }}</td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
        </div>
      </div>

  </div>

@endsection

