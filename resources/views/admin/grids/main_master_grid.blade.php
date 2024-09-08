@extends('templates.master')
@section('title', 'Item Grid')
@section('content')

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar Column -->
        <div class="col-md-3 mt-4">
            @include('admin.base')
        </div>

        <!-- Main Content Column -->
        <div class="col-md-9 mt-4">
            <div class="container-fluid">
                <h1 class="text-center mb-4">Manage Item Master</h1>
                <div class="card">
                    <div class="card-header">
                        Item Master
                    </div>
                    <div class="card-body shadow">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>ID</th>
                                        <th>Item Name</th>
                                        <th>Item Code</th>
                                        <th>Quantity</th>
                                        <th>Manufacturer</th>
                                        <th>Item Type</th>
                                        <th>Measurement</th>
                                        <th>Department</th>
                                        <th>Disposable</th>
                                        <th>Active</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tbody>
                                        <!-- Loop through item master records and display here -->
                                        @foreach ($detailedItems as $item)
                                            <tr>
                                                <td>{{ $item->item_master_id }}</td>
                                                <td>{{ $item->item }}</td>
                                                <td>{{ $item->item_code }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>{{ $item->manufacturer }}</td>
                                                <td>{{ $item->itemType ? $item->itemType : 'N/A' }}</td> <!-- Make sure to use the correct alias -->
                                                <td>{{ $item->measurement }}</td> <!-- Measurement code -->
                                                <td>{{ $item->department }}</td>
                                                <td>{{ $item->is_disposable ? 'Yes' : 'No' }}</td>
                                                <td>{{ $item->is_active ? 'Yes' : 'No' }}</td>
                                                <td>
                                                    <a href="{{ route('edit_item', $item->item_master_id) }}" class="text-primary">Edit</a>
                                                    <a href="{{ route('delete_item', $item->item_master_id) }}" class="text-danger">Remove</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                {{--
                                    <!-- Loop through item master records and display here -->
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->item_master_id }}</td>
                                            <td>{{ $item->item }}</td>
                                            <td>{{ $item->item_code }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->manufacturer }}</td>
                                            <td>{{ $item->itemType ? $itemMaster->itemType->type_name : 'N/A' }}</td>

                                            <td>{{ $item->measurement->code }}</td>
                                            <td>{{ $item->department->department }}</td>
                                            <td>{{ $item->is_disposable ? 'Yes' : 'No' }}</td>
                                            <td>{{ $item->is_active ? 'Yes' : 'No' }}</td>
                                            <td>
                                                <a href="{{route('edit_item',$item->item_master_id)}}" class="text-primary">Edit</a>
                                                <a href="{{route('delete_item',$item->item_master_id)}}" class="text-danger">Remove</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody> --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
