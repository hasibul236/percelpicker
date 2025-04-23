@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card px-4 py-4">
                    <div class="card-header">
                        <h4 class="card-title mb-0 text-center">Pickup Details</h4>
                        {{-- <p class="card-category mb-0">
                            <a class="btn btn-primary" href="{{ route('user.PickupForm') }}" role="button">Pickup New</a
                            >
                            
                        </p> --}}
                    </div>
                    <table class="table table-head-bg-primary table-striped table-hover" id="percelTable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Pickup Person</th>
                                <th scope="col">Location</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Weight</th>
                                <th scope="col">Cost</th>
                                <th scope="col">Pickup Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pickups as $index => $item)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $item->reciever_name }}</td>
                                    <td>{{ $item->pickup_location }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->weight }}</td>
                                    <td>{{ $item->rate }}</td>
                                    <td>{{ $item->pickup_date }}</td>
                                </tr>  
                            @endforeach
                            
                            
                        </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection