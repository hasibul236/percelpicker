@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">        
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