@extends('frontend.layouts.master')
@section('title','E-Mart ||  Cart')

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


@section('main-content')
	<!-- Breadcrumbs -->

	<div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
                              </svg> Home </i></a></li> >
                            <li class=""><a href="">Products</a></li> 
                                             
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>




	<!-- End Breadcrumbs -->

	<br>
    <br>
    <br>

    <div class="container">

       
  
            
          
      <div class="p-2 mb-10 bg-dark text-white w-100 vh-50 p-3"><h5><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-1-square-fill" viewBox="0 0 16 16">
		<path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm7.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383z"/>
	  </svg> Product Carts</h5>
        <br>

        <center>
  
        <div class="mainWrapper">
          <div class="statusBar">
            <span class="pBar"></span>
            <div class="node n0 done nConfirm0">
              <div class="main done m0 done nConfirm0">1</div>
              
              <span class="text t0 done nConfirm0"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart</span>
            </div>

            <div class="node n1 nConfirm1">
              <div class="main m1 nConfirm1"></div>
              <span class="text t1 nConfirm1"> <i class="fa fa-user"></i>Details</span>
            </div>

            <div class="node n2 nConfirm2">
              <div class="main m2 nConfirm2"></div>
              <span class="text t2 nConfirm2"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-truck" viewBox="0 0 16 16">
                <path d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
              </svg></i>Shipping</span>
            </div>
            <div class="node n3 nConfirm3">
              <div class="main m3 nConfirm3"></div>
              <span class="text t3 nConfirm3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
              </svg> Payment</span>
            </div>
            <div class="node n4 nConfirm4">
              <div class="main m4 nConfirm4"></div>
              <span class="text t4 nConfirm4"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-patch-check" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                <path d="m10.273 2.513-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z"/>
              </svg> Review </span>
            </div>
          </div> 
        </div>
      </div>
      </div>
    </div>

    <style>

        :root {
            --green: #1cbd2c;
            --grey: #c4c4c4;
            --white: #ffffff;
            --padding: 1em;
        }
        
        * {
            padding: 0;
            border: 0;
            -webkit-transition: all 0.3s ease;
            -moz-transition: all 0.3s ease;
            -o-transition: all 0.3s ease;
            transition: all 0.3s ease;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }
        
        
        .mainWrapper {
            width: 100ch;
            min-width: 40ch;
            max-width: 75vw;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        
        .statusBar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0;
            width: 100%;
            position: relative;
            cursor: default;
        }
        
        .statusBar::before {
            content: "";
            height: 0.3em;
            background-color: var(--grey);
            position: absolute;
            left: var(--padding);
            right: var(--padding);
        }
        
        .pBar {
            content: "";
            height: 0.3em;
            border-radius: 0 0 0.15em 0.15em;
            background-color: var(--green);
            max-width: 100%;
            margin: 10px #000000 solid;
            position: absolute;
            left: 0;
            width: 0%;
        }
        
        .statusBar > .node {
            background-color: var(--grey);
            height: 1.2em;
            width: 1.2em;
            border-radius: 100%;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        
        .node > .text {
            font-weight: 200;
            color: var(--grey);
            text-align: center;
            position: absolute;
            top: 2.5em;
            cursor: ;
        }
        
        .node.done {
            background-color: var(--green);
        }
        
        .node > .text.done {
            color: var(--green);
        }
        
        .node > .main {
            position: absolute;
            border: 0.2em var(--grey) solid;
            width: 0;
            height: 0;
            border-radius: 100%;
        }
        
        .node > .main.done {
            border: 0.2em var(--green) solid;
            width: 2em;
            height: 2em;
            border-radius: 100%;
        }
        
        .mainWrapper > .buttonHolder {
            margin-top: 3em;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .button {
            padding: 0.5em;
            padding-left: 1em;
            padding-right: 1em;
            margin: 1em;
            font-size: 1.3em;
            border-radius: 1.5em;
            cursor: pointer;
        }
        .button.b-next {
            background-color: var(--green);
            color: var(--white);
        }
        
        .button.b-next:hover {
            box-shadow: 3px 5px 6px 0px rgba(0, 0, 0, 0.2);
        }
        
        .button.disabled,
        .button.disabled:hover {
            opacity: 30%;
            cursor: default;
        }
        
        .button.b-next.disabled:hover {
            box-shadow: none;
        }
        
        .button.b-back {
            box-shadow: 0px 0px 0px 0.2em var(--green) inset;
            background-color: var(--white);
            color: var(--green);
        }
        
        .made {
            position: absolute;
            bottom: 0.7em;
        }
        
        .made > .credit {
            opacity: 40%;
            color: #4b4b4b;
            text-align: center;
        }
        
            </style>
        
            <script>
        
        var state = 0;
        var stateMax = 4;
        
        function next() {
            console.log("Next", state);
            // browser side functions here
        }
        
        function back() {
            console.log("Back", state);
            // browser side functions here
        }
        
        $("#next").click(function () {
            if (state < stateMax) {
                next();
        
                state += 1;
        
                // Enables 'back' button if disabled
                $("#back").removeClass("disabled");
        
                // Adds class to make nodes green
                $(".nConfirm" + state).each(function () {
                    $(this).addClass("done");
                });
        
                // Progress bar animation
                var pBar = (state / stateMax) * 100;
                $(".pBar").css("width", `${pBar}%`);
        
                // Disables 'next' button if end of steps
                if (state == 4) {
                    $("#next").addClass("disabled");
                }
            }
        });
        
        $("#back").click(function () {
            if (state > 0) {
                back();
        
                // Enables 'next' button if disabled
                $("#next").removeClass("disabled");
        
                // removes class that makes nodes green
                $(".nConfirm" + state).each(function () {
                    $(this).removeClass("done");
                });
        
                state -= 1;
        
                // Progress bar animation
                var pBar = (state / stateMax) * 100;
                $(".pBar").css("width", `${pBar}%`);
        
                // Disables 'back' button if end of steps
                if (state == 0) {
                    $("#back").addClass("disabled");
                }
            }
        });
        
        
              </script>
        
              <br>
			  <br>
              


	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>PRODUCT </th>
								<th>NAME</th>
								<th>PRICE</th>
								<th>QUANTITY</th>
								<th>TOTAL</th>
								<th>ACTION</th>
							</tr>
						</thead>
						<tbody id="cart_item_list">
							<form action="{{route('cart.update')}}" method="POST">
								@csrf
								@if(Helper::getAllProductFromCart())
									@foreach(Helper::getAllProductFromCart() as $key=>$cart)
										<tr>
											@php
											$photo=explode(',',$cart->product['photo']);
											@endphp
											<td class="image" data-title="No"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></td>
											<td class="product-des" data-title="Description">
												<p class="product-name"><a href="{{route('product-detail',$cart->product['slug'])}}" target="_blank">{{$cart->product['title']}}</a></p>
												<p class="product-des">{!!($cart['summary']) !!}</p>
											</td>
											<td class="price" data-title="Price"><span><i class="fa fa-inr">{{number_format($cart['price'],2)}}</i></span></td>
											<td class="qty" data-title="Qty"><!-- Input Order -->
												<div class="input-group">
													<div class="button minus">
														<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[{{$key}}]">
															<i class="ti-minus"></i>
														</button>
													</div>
													<input type="text" name="quant[{{$key}}]" class="input-number"  data-min="1" data-max="100" value="{{$cart->quantity}}">
													<input type="hidden" name="qty_id[]" value="{{$cart->id}}">
													<div class="button plus">
														<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[{{$key}}]">
															<i class="ti-plus"></i>
														</button>
													</div>
												</div>
												<!--/ End Input Order -->
											</td>
											<td class="total-amount cart_single_price" data-title="Total"><span class="money"><i class="fa fa-inr">{{$cart['amount']}}</i></span></td>

											<td class="action" data-title="Remove"><a href="{{route('cart-delete',$cart->id)}}"><i class="ti-trash remove-icon"></i></a></td>
										</tr>
									@endforeach
									<track>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										<td class="float-right">
											<button class="btn float-right" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-repeat" viewBox="0 0 16 16">
												<path d="M11.534 7h3.932a.25.25 0 0 1 .192.41l-1.966 2.36a.25.25 0 0 1-.384 0l-1.966-2.36a.25.25 0 0 1 .192-.41zm-11 2h3.932a.25.25 0 0 0 .192-.41L2.692 6.23a.25.25 0 0 0-.384 0L.342 8.59A.25.25 0 0 0 .534 9z"/>
												<path fill-rule="evenodd" d="M8 3c-1.552 0-2.94.707-3.857 1.818a.5.5 0 1 1-.771-.636A6.002 6.002 0 0 1 13.917 7H12.9A5.002 5.002 0 0 0 8 3M3.1 9a5.002 5.002 0 0 0 8.757 2.182.5.5 0 1 1 .771.636A6.002 6.002 0 0 1 2.083 9z"/>
											  </svg> Update</button>
										</td>
									</track>
								@else
										<tr>
											<td>
												There are no any carts available. <a href="{{route('product-grids')}}" style="color:blue;">Continue shopping</a>

											</td>
										</tr>
								@endif

							</form>
						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<!-- Total Amount -->
					<div class="total-amount">
						<div class="row">
							<div class="col-lg-8 col-md-5 col-12">
								<div class="left">
									<div class="coupon">
									<form action="{{route('coupon-store')}}" method="POST">
											@csrf
											<input name="code" placeholder="Enter Your Coupon">
											<button class="btn">Apply</button>
										</form>
									</div>
									{{-- <div class="checkbox">`
										@php
											$shipping=DB::table('shippings')->where('status','active')->limit(1)->get();
										@endphp
										<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox" onchange="showMe('shipping');"> Shipping</label>
									</div> --}}
								</div>
							</div>
							<div class="col-lg-4 col-md-7 col-12">
								<div class="right">
									<ul>
										<li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Cart Subtotal<span><i class="fa fa-inr">{{number_format(Helper::totalCartPrice(),2)}}</i></span></li>

										@if(session()->has('coupon'))
										<li class="coupon_price" data-price="{{Session::get('coupon')['value']}}">You Save<span><i class="fa fa-inr">{{number_format(Session::get('coupon')['value'],2)}}</i></span></li>
										@endif
										@php
											$total_amount=Helper::totalCartPrice();
											if(session()->has('coupon')){
												$total_amount=$total_amount-Session::get('coupon')['value'];
											}
										@endphp
										@if(session()->has('coupon'))
											<li class="last" id="order_total_price">You Pay<span><i class="fa fa-inr">{{number_format($total_amount,2)}}</i></span></li>
										@else
											<li class="last" id="order_total_price">You Pay<span><i class="fa fa-inr">{{number_format($total_amount,2)}}</i></span></li>
										@endif
									</ul>
									<div class="button5">
										<a href="{{route('checkout')}}" class="btn">Checkout</a>
										<a href="{{route('product-grids')}}" class="btn">Continue shopping</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ End Total Amount -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->

	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over 100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->

	<!-- Start Shop Newsletter  -->
<br>
<br>
<br>
	<!-- End Shop Newsletter -->

@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#F7941D !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') );
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0;
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

@endpush