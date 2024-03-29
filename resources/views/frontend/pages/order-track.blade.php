@extends('frontend.layouts.master')

@section('title','E-Mart || Track')

@section('main-content')
    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Home</a></li> >
                            <li class="active"><a href="javascript:void(0);">Order Track</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    

    <div class="container">
    <div class="card">
        <h5 class="card-header">Track your Order</h5>
        <div class="card-body">
          <p class="card-text">To track your order please enter your Order ID in the box below and press the "Track" button. This was given
            to you on your receipt and in the confirmation email you should have received.</p>
            <form class="row tracking_form my-2" action="{{route('product.track.order')}}" method="post" novalidate="novalidate">
                @csrf
          <br>
          <div class="col-md-8 form-group">
            <input type="text" class="form-control p-2"  name="order_number" placeholder="Enter your valid order number">
        </div>
     
        <div class="col-md-8 form-group">
            <button type="submit" value="submit" class="btn submit_btn">Track Order</button>
        </div>
    </form>
        </div>
      </div>
    </div>
    <br>
    <br>

    <style>
        /* Custom class for card header color */
        .card-header {
            background-color: black; /* Change this color to your desired color */
            color: #fff; /* Change text color if needed */
        }
    </style>

    <!-- End Breadcrumbs -->
{{-- <section class="tracking_box_area section_gap py-5">
    <div class="container">
        <div class="tracking_box_inner">
            <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given
                to you on your receipt and in the confirmation email you should have received.</p>
            <form class="row tracking_form my-4" action="{{route('product.track.order')}}" method="post" novalidate="novalidate">
              @csrf
                <div class="col-md-8 form-group">
                    <input type="text" class="form-control p-2"  name="order_number" placeholder="Enter your order number">
                </div>
                <div class="col-md-8 form-group">
                    <button type="submit" value="submit" class="btn submit_btn">Track Order</button>
                </div>
            </form>
        </div>
    </div>
</section> --}}
@endsection