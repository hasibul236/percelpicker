
@extends('layouts.user')

@section('content')
<div class="content">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card ">
                    <h2 class="mb-3 px-4 py-4 text-center">Parcel Pickup Form</h2>

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

                    <form method="POST" action="{{ route('user.storePickup') }}" enctype="multipart/form-data" class="px-4 py-4">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Pickup Location/Sharee Center Name</label>
                            <select class="form-select form-select-lg form-control" name="pickup_location" value="{{ old('pickup_location') }}" required>                    
                                <option value="">Select One</option>
                                <option value="Delhivery">Delhivery</option>
                                <option value="Ecom Express">Ecom Express</option>
                                <option value="DTDC">DTDC</option>
                                <option value="Shree Maruti">Shree Maruti</option>
                                <option value="Xpress Bess">Xpress Bess</option>
                                <option value="India Post">India Post</option>
                                <option value="Bluedart">Bluedart</option>
                                <option value="Rivigo">Rivigo</option>
                                <option value="DHL">DHL</option>
                                <option value="Fedex">Fedex</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Receiver Company Name</label>
                            <input type="text" name="reciever_name" value="{{ Auth::user()->name  }}" class="form-control" readonly>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id  }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Pincode</label>
                            <input type="number" name="pincode" value="{{ old('pincode') }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="tel" name="phone" value="{{ Auth::user()->phone }}" class="form-control" required readonly>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Rate</label>
                            <input type="number" name="rate" value="{{ old('rate') }}" class="form-control" step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Weight (Kg)</label>
                            <input type="number" name="weight" value="{{ old('weight') }}" class="form-control" step="0.01" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Barcode</label>
                            <input type="text" name="barcode" id="barcode" class="form-control" required readonly>
                        </div>
                        
                        <div id="reader" width="300px"></div>

                        <div class="mb-3">
                            <label class="form-label">Parcel Type</label>
                            <input type="text" name="percel_type" value="{{ old('percel_type') }}" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Parcel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
