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
                <h1 class="text-center">At A Glance</h1>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Admins</h5>
                                <h3 class="text-center">{{$adminCount}}</h3>
                                
                                 
                                 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Categories</h5>
                                <h3 class="text-center">{{$categoryCount}}</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Departments</h5>
                                <h3 class="text-center">{{$departmentCount}}</h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Items</h5>
                                <h3 class="text-center">{{$itemCount}}</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Item Types</h5>
                                <h3 class="text-center">{{$itemTypeCount}}</h3>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Measurements</h5>
                                <h3 class="text-center">{{$measurementsCount}}</h3>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Average Quantity per Item Type</h5>
                                @foreach($averageQuantities as $averageQuantity)
                                <div class="item-type">
                                    <h6>{{ $averageQuantity->type_name }}</h6>
                                    <h3 class="text-center">{{ $averageQuantity->average_quantity }}</h3>
                                </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Quantity of Disposable Items</h5>
                                <h3 class="text-center">{{$totalDisposableQuantity}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add a line break at the end of the file -->
@endsection

