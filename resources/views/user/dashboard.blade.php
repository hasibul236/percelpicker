
@extends('layouts.user')

@section('content')
<div class="content">
    <div class="container-fluid">
        <h4 class="page-title">Dashboard</h4>
        <div class="row">
            <div class="col-md-3">
                <div class="card card-stats card-warning">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-users"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Visitors</p>
                                    <h4 class="card-title">1,294</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats card-success">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-bar-chart"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Sales</p>
                                    <h4 class="card-title">$ 1,345</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats card-danger">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-newspaper-o"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Subscribers</p>
                                    <h4 class="card-title">1303</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-stats card-primary">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5">
                                <div class="icon-big text-center">
                                    <i class="la la-check-circle"></i>
                                </div>
                            </div>
                            <div class="col-7 d-flex align-items-center">
                                <div class="numbers">
                                    <p class="card-category">Order</p>
                                    <h4 class="card-title">576</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Table</h4>
                        <p class="card-category mb-0">
                            <a class="btn btn-primary" href="{{ route('user.PickupForm') }}" role="button">Pickup New</a
                            >
                            
                        </p>
                    </div>
                    <div class="card-body">
                        <table class="table table-head-bg-primary table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Pickup Person</th>
                                    <th scope="col">Location</th>
                                    <th scope="col">Phone No</th>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Cost</th>
                                    <th scope="col">Percel Type</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pickupData as $index => $item)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $item->reciever_name }}</td>
                                        <td>{{ $item->pickup_location }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->weight }}</td>
                                        <td>{{ $item->rate }}</td>
                                        <td>{{ $item->percel_type }}</td>
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

@endsection
