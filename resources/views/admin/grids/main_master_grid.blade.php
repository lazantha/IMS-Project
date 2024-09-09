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
                
                <!-- Search Form -->
                <form class="d-flex search-form mb-4" role="search" method="GET" action="{{ route('admin-main_master-grid') }}">
                    <input class="form-control search-input w-50 me-2" name="search" type="search" placeholder="Find by Item Name" value="{{ request()->query('search') }}" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <a href="{{ route('admin-main_master-grid') }}" class="btn btn-outline-primary ms-2">Get All</a>
                </form>
                
                <!-- Item Master Table -->
                <div class="card shadow-sm border-light">
                    <div class="card-header bg-info text-white">
                        <h5 class="mb-0">Item Master</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped mb-0">
                                <thead class="table-dark">
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
                                    @foreach ($detailedItems as $item)
                                        <tr>
                                            <td>{{ $item->item_master_id }}</td>
                                            <td>{{ $item->item }}</td>
                                            <td>{{ $item->item_code }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->manufacturer }}</td>
                                            <td>{{ $item->itemType ? $item->itemType : 'N/A' }}</td>
                                            <td>{{ $item->measurement }}</td>
                                            <td>{{ $item->department }}</td>
                                            <td>
                                                <span class="badge {{ $item->is_disposable ? 'bg-success' : 'bg-secondary' }}">
                                                    {{ $item->is_disposable ? 'Yes' : 'No' }}
                                                </span>
                                            </td>
                                            <td>
                                                <span class="badge {{ $item->is_active ? 'bg-success' : 'bg-secondary' }}">
                                                    {{ $item->is_active ? 'Yes' : 'No' }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="{{ route('edit_item', $item->item_master_id) }}" class="btn btn-outline-primary btn-sm">Edit</a>
                                                <a href="{{ route('delete_item', $item->item_master_id) }}" class="btn btn-outline-danger btn-sm">Remove</a>
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

@endsection
