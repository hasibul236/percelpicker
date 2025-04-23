@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">All User Details</h4>
                        <p class="card-category mb-0">
                            <a class="btn btn-primary" href="{{ route('admin.viewAddUser') }}" role="button">Add New User</a>
                            
                        </p>
                    </div>
                    <table class="table table-head-bg-primary table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone No</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $item)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
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