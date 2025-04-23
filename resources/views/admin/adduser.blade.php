
@extends('layouts.admin')

@section('content')
<div class="content">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card ">
                    <h2 class="mb-3 px-4 py-4 text-center">User Add Form</h2>

                    @if(session('success'))
                        <div class="alert alert-success px-4">{{ session('success') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul class="mb-0">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('admin.storeUser') }}" enctype="multipart/form-data" class="px-4 py-4">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" required>
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email Id</label>
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control" required>                            
                        </div>                        

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pincode</label>
                            <input type="number" name="pincode" value="{{ old('pincode') }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" value="{{ old('password') }}" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Save User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
