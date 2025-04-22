@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- <div class="content-wrapper d-flex flex-direction-row align-items-center justify-content-center">
            <div class="section">
                <h1>Efficient and Reliable Parcel Picking Services</h1>
                <p>
                With a strong focus on precision and speed, our Parcel Picker services are designed to streamline logistics operations for warehouses and distribution centers. 
                Our dedicated professionals ensure that every package is picked accurately, handled with care, and prepared for timely dispatch. 
                </p>
                <p>
                Whether you're managing high-volume shipments or need specialized item handling, we provide the reliability and attention to detail that your supply chain demands. 
                Trust our experience in warehouse operations to keep your parcels moving efficiently and your customers satisfied.
                </p>

            </div>
            <div class="section">
                <img src="{{ asset('img/homepage.jpg') }}" class="img-fluid rounded-top" alt=""/>
                
            </div>
        </div> --}}
        <section class="hero text-center">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-lg-6 text-start">
                  <p class="text-danger fw-semibold">SUPER FAST DELIVERY</p>
                  <h1 class="mb-3">We have faster delivery in your town</h1>
                  <p>We are the most faster and favourite delivery service all over the town.</p>                  
                </div>
                <div class="col-lg-6 text-center">
                  <img src="{{ asset('img/delivery_man.jpg') }}" alt="Delivery Man" class="img-fluid">
                </div>
              </div>
            </div>
          </section>
        
          <section class="testimonial text-center bg-light">
            <div class="container">
              <div class="row">
                <div class="col-md-6 offset-md-3">
                  <h2 class="mb-4">What made you decide to use our service?</h2>
                  <p>Order your product at any time and we will deliver them directly to your home. We have faster delivery.</p>
                  <div class="card p-4 mt-4">
                    <img src="{{ asset('img/buyorsell.jpg') }}" class="mx-auto mb-3" alt="User" style="width:100%;">
                    <p class="mb-1"><strong>99% Positive reviews</strong></p>
                    <p class="text-muted">We always try to deliver our best performance and keep our users happy.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
    </div>
</div>
@endsection