@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-12">
                <div class="card">
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