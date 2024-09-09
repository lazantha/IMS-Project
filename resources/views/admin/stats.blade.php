@extends('templates.master')
@section('title', 'Dashboard Overview')
@section('content')

<div class="container mt-4">
    <div class="row">
        <!-- Sidebar Section -->
        <div class="col-md-3 mt-4">
            @include('admin.base')
        </div>

        <!-- Dashboard Main Content -->
        <div class="col-md-9">
            <div class="container">
                <h1 class="text-center mb-4" style="font-family: 'Roboto', sans-serif; color: #333;">Dashboard Overview</h1>

                <!-- Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card bg-primary text-white shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Montserrat', sans-serif;">Total Admins</h5>
                                <h3 class="text-center" style="font-family: 'Roboto', sans-serif;">{{ $adminCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-success text-white shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Montserrat', sans-serif;">Total Categories</h5>
                                <h3 class="text-center" style="font-family: 'Roboto', sans-serif;">{{ $categoryCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-info text-white shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Montserrat', sans-serif;">Total Departments</h5>
                                <h3 class="text-center" style="font-family: 'Roboto', sans-serif;">{{ $departmentCount }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card bg-warning text-dark shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Montserrat', sans-serif;">Total Items</h5>
                                <h3 class="text-center" style="font-family: 'Roboto', sans-serif;">{{ $itemCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-danger text-white shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Montserrat', sans-serif;">Total Item Types</h5>
                                <h3 class="text-center" style="font-family: 'Roboto', sans-serif;">{{ $itemTypeCount }}</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card bg-secondary text-white shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Montserrat', sans-serif;">Total Measurements</h5>
                                <h3 class="text-center" style="font-family: 'Roboto', sans-serif;">{{ $measurementsCount }}</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Detailed Stats Cards -->
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="card bg-light shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Montserrat', sans-serif;">Average Quantity per Item Type</h5>
                                @foreach($averageQuantities as $averageQuantity)
                                <div class="mb-3">
                                    <h6 class="font-weight-bold" style="font-family: 'Roboto', sans-serif; color: #555;">{{ $averageQuantity->type_name }}</h6>
                                    <h3 class="text-center" style="font-family: 'Roboto', sans-serif;">{{ $averageQuantity->average_quantity }}</h3>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card bg-light shadow-lg">
                            <div class="card-body">
                                <h5 class="card-title" style="font-family: 'Montserrat', sans-serif;">Total Quantity of Disposable Items</h5>
                                <h3 class="text-center" style="font-family: 'Roboto', sans-serif;">{{ $totalDisposableQuantity }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<!-- Add the required font links in the head section of your master template -->
@section('head')
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
@endsection
