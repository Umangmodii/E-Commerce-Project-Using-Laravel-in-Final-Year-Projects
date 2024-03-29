@extends('frontend.layouts.master')

@section('title','E-Mart || Product ')

@section('main-content')
	
		<!-- Breadcrumbs -->
		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<ul class="bread-list">
								<li><a href="{{route('home')}}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
									<path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
								  </svg> Home </i></a></li> >
								<li class=""><a href="">Product List</a></li> 
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<br>

		<div class="row">
			<div class="row">
				<img src="/storage/photos/1/Banner/oneplus.jpg" class="img-fluid w-50">		 
				<img src="/storage/photos/1/Banner/s23.png" class="img-fluid w-50"> 
			</div>

		<div class="container">
			<br>
<br>
			<h5> Stay productive with the E-Mart Online Store products you love.  </h5> 
					<br>
					<a href="/product-lists">	<h6 class="text-primary"> Shop Product  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
						<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
					  </svg> </h6> </a>

					  
					<br>

					<div class="card">
						<div class="card-body">
							
		
							<br>
						&nbsp; &nbsp; &nbsp;	<a href="/product-sub-cat/smartphones/apple"><img src="/storage/photos/1/Products/i14.jpg" class="rounded float-left w-25" alt="..."></a>
						&nbsp; &nbsp; &nbsp;	<a href="/product-cat/mens-fashion"><img src="/storage/photos/1/Products/g1.jpg" class="rounded float-center w-25" alt="..."></a>
						&nbsp; &nbsp; &nbsp;	<a href="/product-cat/watches"><img src="/storage/photos/1/Products/w1.jpg" class="rounded float-center w-25" alt="..."></a>
							
						</div>
					  </div>

					  <br>
					  <br>
				

					<div class="card">
						<div class="card-body">

					<div class="container"> <div class="row"> <div class="col-md-6"><br> <br> <br><br><br><br><br><br><h6><h5>E-Mart Online Store</h5>  <br> <h6> Dennis Lingo Men's Checkered Slim Fit Cotton Casual Shirt</h6>
						<br> <h6> List Price : 701 </h6> 
						<br>
						
																	<a title="Add to cart" href="{{route('add-to-cart','slug')}}"><button type="button" class="btn btn-primary">Add to cart</button></a>
																
						</div> <div class="col-md-6"> 
						<br><img src="/storage/photos/1/Products/new.jpg" alt="LONGBO Master Royale Analog Stainless Steel Watch For Men" class="img-fluid w=25"> </div> </div> </div>
					
						     
				</div>
			</div>

						<br>
						

			
			</div>
		</div>

<br>


		
	
		

		<!-- End Breadcrumbs -->
		<form action="{{route('shop.filter')}}" method="POST">
		@csrf
			<!-- Product Style 1 -->
			<section class="product-area shop-sidebar shop-list shop section">
				{{-- <div class="container"> --}}
					<div class="row">
						<div class="col-lg-3 col-md-4 col-12">
							<div class="shop-sidebar">
                                <!-- Single Widget -->
                                <div class="single-widget category">
                                    <h3 class="title">Categories</h3>
                                    <ul class="categor-list">
										@php
											// $category = new Category();
											$menu=App\Models\Category::getAllParentWithChild();
										@endphp
										@if($menu)
										<li>
											@foreach($menu as $cat_info)
													@if($cat_info->child_cat->count()>0)
														<li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a>
															<ul>
																@foreach($cat_info->child_cat as $sub_menu)
																	<li><a href="{{route('product-sub-cat',[$cat_info->slug,$sub_menu->slug])}}">{{$sub_menu->title}}</a></li>
																@endforeach
															</ul>
														</li>
													@else
														<li><a href="{{route('product-cat',$cat_info->slug)}}">{{$cat_info->title}}</a></li>
													@endif
											@endforeach
										</li>
										@endif
                                        {{-- @foreach(Helper::productCategoryList('products') as $cat)
                                            @if($cat->is_parent==1)
												<li><a href="{{route('product-cat',$cat->slug)}}">{{$cat->title}}</a></li>
											@endif
                                        @endforeach --}}
                                    </ul>
                                </div>
                                <!--/ End Single Widget -->
                                <!-- Shop By Price -->
								<div class="single-widget range">
									<h3 class="title">Price</h3>
									<div class="price-filter">
										<div class="price-filter-inner">
											{{-- <div id="slider-range" data-min="10" data-max="2000" data-currency="%"></div>
												<div class="price_slider_amount">
												<div class="label-input">
													<span>Range:</span>
													<input type="text" id="amount" name="price_range" value='@if(!empty($_GET['price'])) {{$_GET['price']}} @endif' placeholder="Add Your Price"/>
												</div>
											</div> --}}
											@php
												$max=DB::table('products')->max('price');
												// dd($max);
											@endphp
											<div id="slider-range" data-min="0" data-max="{{$max}}"></div>
											<div class="product_filter">
											<button type="submit" class="filter_button">Filter</button>
											<div class="label-input">
												<span>Range:</span>
												<input style="" type="text" id="amount" readonly/>
												<input type="hidden" name="price_range" id="price_range"  value="@if(!empty($_GET['price'])){{$_GET['price']}}@endif"/>
											</div>
											</div>
										</div>
									</div>
									{{-- <ul class="check-box-list">
										<li>
											<label class="checkbox-inline" for="1"><input name="news" id="1" type="checkbox">$20 - $50<span class="count">(3)</span></label>
										</li>
										<li>
											<label class="checkbox-inline" for="2"><input name="news" id="2" type="checkbox">$50 - $100<span class="count">(5)</span></label>
										</li>
										<li>
											<label class="checkbox-inline" for="3"><input name="news" id="3" type="checkbox">$100 - $250<span class="count">(8)</span></label>
										</li>
									</ul> --}}
								</div>
								<!--/ End Shop By Price -->
                                <!-- Single Widget -->
                                <div class="single-widget recent-post">
                                    <h3 class="title">Recent Viewed</h3>
                                    {{-- {{dd($recent_products)}} --}}
                                    @foreach($recent_products as $product)
                                        <!-- Single Post -->
                                        @php 
                                            $photo=explode(',',$product->photo);
                                        @endphp
                                        <div class="single-post first">
                                            <div class="image">
                                                <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                            </div>
                                            <div class="content">
                                                <h5><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h5>
                                                @php
                                                    $org=($product->price-($product->price*$product->discount)/100);
                                                @endphp
                                                <p class="price"><del class="text-muted">₹{{number_format($product->price,2)}}</del> ₹{{number_format($org,2)}}  </p>                                                
                                            </div>
                                        </div>
                                        <!-- End Single Post -->
                                    @endforeach
                                </div>
                                <!--/ End Single Widget -->
                                <!-- Single Widget -->
                                <div class="single-widget category">
                                    <h3 class="title">Brands</h3>
                                    <ul class="category-list">
                                        @php
                                            $brands=DB::table('brands')->orderBy('title','ASC')->where('status','active')->get();
                                        @endphp
                                        @foreach($brands as $brand)
                                            <li><a href="{{route('product-brand',$brand->slug)}}">{{$brand->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!--/ End Single Widget -->
                        	</div>
						</div>
						<div class="col-lg-9 col-md-8 col-12">
							<div class="row">
								<div class="col-12">
									<!-- Shop Top -->
									<div class="shop-top">
										<div class="shop-shorter">
											<div class="single-shorter">
												<label>Show :</label>
												<select class="show" name="show" onchange="this.form.submit();">
													<option value="">Default</option>
													<option value="9" @if(!empty($_GET['show']) && $_GET['show']=='9') selected @endif>09</option>
													<option value="15" @if(!empty($_GET['show']) && $_GET['show']=='15') selected @endif>15</option>
													<option value="21" @if(!empty($_GET['show']) && $_GET['show']=='21') selected @endif>21</option>
													<option value="30" @if(!empty($_GET['show']) && $_GET['show']=='30') selected @endif>30</option>
												</select>
											</div>
											<div class="single-shorter">
												<label>Sort By :</label>
												<select class='sortBy' name='sortBy' onchange="this.form.submit();">
													<option value="">Default</option>
													<option value="title" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='title') selected @endif>Name</option>
													<option value="price" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='price') selected @endif>Price</option>
													<option value="category" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='category') selected @endif>Category</option>
													<option value="brand" @if(!empty($_GET['sortBy']) && $_GET['sortBy']=='brand') selected @endif>Brand</option>
												</select>
											</div>
										</div>
										<ul class="view-mode">
											<li><a href="{{route('product-grids')}}"><i class="fa fa-th-large"></i></a></li>
											<li class="active"><a href="javascript:void(0)"><i class="fa fa-th-list"></i></a></li>
										</ul>
									</div>
									<!--/ End Shop Top -->
								</div>
							</div>
							<div class="row">
								@if(count($products))
									@foreach($products as $product)
									 	{{-- {{$product}} --}}
										<!-- Start Single List -->
										<div class="col-12">
											<div class="row">
												<div class="col-lg-4 col-md-6 col-sm-6">
													<div class="single-product">
														<div class="product-img">
															<a href="{{route('product-detail',$product->slug)}}">
															@php 
																$photo=explode(',',$product->photo);
															@endphp
															<img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
															<img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
															</a>
															<div class="button-head">
																<div class="product-action">
																	<a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																	<a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" class="wishlist" data-id="{{$product->id}}"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
																</div>
																<div class="product-action-2">
																	<a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="col-lg-8 col-md-6 col-12">
													<div class="list-content">
														<div class="product-content">
														
                                          
															@if(isset($product->brand))
															<p>Brand: {{ $product->brand->title }}</p>
														@endif
                                      
															<div class="product-price">
																
																<h3 class="title"><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
																@php
																	$after_discount=($product->price-($product->price*$product->discount)/100);
																@endphp
<br>

List Price :<span class="text-danger">₹{{number_format($after_discount,2)}}</span>
	M.R.P :<del>₹{{number_format($product->price,2)}}</del>
															
															

															<br>
														
																	<a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}"><button type="button" class="btn btn-primary">Add to cart</button></a>
																
																					
														{{-- <p>{!! html_entity_decode($product->summary) !!}</p> --}}
														</div>
														{{-- <p class="des pt-2">{!! html_entity_decode($product->summary) !!}</p>
														<a href="javascript:void(0)" class="btn cart" data-id="{{$product->id}}">Buy Now!</a> --}}
													</div>
												</div>
											</div>
										</div>
										<!-- End Single List -->
									@endforeach
								@else
								<div class="container-fluid">
									<div class="row">
									
									   <div class="col-md-12">
									   
											   <div class="card">
										   <div class="card-header">
										   </div>
										   <div class="card-body cart">
												   <div class="col-sm-12 empty-cart-cls text-center">
													   <img src="/storage/photos/1/Banner/Screenshot 2023-12-10 161500.png" width="230" height="190" class="img-fluid mb-4 mr-3">
													   <h3 class="text-warning"  >There are no products.</h3>
													   <a href="/product-grids" class="btn btn-primary m-3 text-white" data-abc="true">continue shopping</a>
													   
												   
												   </div>
										   </div>
								   </div>
										   
									   
									   </div>
									
									</div>
								   
								   </div>
	
								   <style>
	
	.mt-100{
	   margin-top:100px;
	
	}
	
	
	.card {
		margin-bottom: 30px;
		border: 0;
		-webkit-transition: all .3s ease;
		transition: all .3s ease;
		letter-spacing: .5px;
		border-radius: 8px;
		-webkit-box-shadow: 1px 5px 24px 0 rgba(68,102,242,.05);
		box-shadow: 1px 5px 24px 0 rgba(68,102,242,.05);
	}
	
	.card .card-header {
		background-color: #fff;
		border-bottom: none;
		padding: 24px;
		border-bottom: 1px solid #f6f7fb;
		border-top-left-radius: 8px;
		border-top-right-radius: 8px;
	}
	
	.card-header:first-child {
		border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
	}
	
	
	
	.card .card-body {
		padding: 30px;
		background-color: transparent;
	}
	
	.btn-primary, .btn-primary.disabled, .btn-primary:disabled {
		background-color: #4466f2!important;
		border-color: #4466f2!important;
	}
	
									</style>
								@endif
							</div>

							{{-- <br>
							<br> --}}
							
							{{-- <center>
	
							<div class="row center">
								<div class="col-md-12 justify-content-center d-flex">
									{{$products->appends($_GET)->links()}}
									<br>
								</div>
							  </div> 
	
							</center> --}}

							


							 <div class="row">
                            <div class="col-md-12 justify-content-center d-flex">
                                {{-- {{$products->appends($_GET)->links()}}  --}}
                            </div>
                          </div>
						</div>
					</div>
			
			</section>
			<!--/ End Product Style 1  -->	
		</form>

<!-- Ads Banner-->

<!-- End Most Popular Area -->
<div class="product-area most-popular section">
       
	<div class="row">
		<div class="col-12">
			<div class="section-title">
				<h2>Recently Viewed Product</h2>
			</div>
		</div>
	</div>

<div class="row">
<div class="col-12">
	<div class="owl-carousel popular-slider">
		@foreach($recent_products as $product)
		<!-- Single Post -->
		
				<!-- Start Single Product -->
			<div class="single-product">
				<div class="product-img">
				
						
						@php 
						$photo=explode(',',$product->photo);
					@endphp

						<img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
						
						{{-- <span class="out-of-stock">Hot</span> --}}
					</a>
					<div class="button-head">
						<div class="product-action">
							<a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
							<a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" ><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
						</div>
						<div class="product-action-2">
							<a href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
						</div>
					</div>
				</div>
				<div class="product-content">
					@if(isset($product->brand))
					<p>Brand: {{ $product->brand->title }}</p>
				@endif
					<h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
					<div class="product-price">
						{{-- <span class="old">₹{{number_format($product->price,2)}}</span> --}}
						{{-- <span class="text-danger">₹{{number_format($after_discount,2)}}</span> --}}
						@php
											$org=($product->price-($product->price*$product->discount)/100);
										@endphp
						{{-- <span class="text-danger">₹{{number_format($after_discount,2)}}</span> --}}
						<p class="price"><del class="text-muted ">₹{{number_format($product->price,2)}}</del> <span class="text-danger"> ₹{{number_format($org,2)}} </span>  </p>                                                

					</div>
				</div>
			</div>
			<!-- End Single Product -->
		
		@endforeach
	</div>
</div>
</div>
</div>


	

		<!-- Modal -->
		@if($products)
			@foreach($products as $key=>$product)
				<div class="modal fade" id="{{$product->id}}" tabindex="-1" role="dialog">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
								</div>
								<div class="modal-body">
									<div class="row no-gutters">
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
											<!-- Product Slider -->
												<div class="product-gallery">
													<div class="quickview-slider-active">
														@php 
															$photo=explode(',',$product->photo);
														// dd($photo);
														@endphp
														@foreach($photo as $data)
															<div class="single-slider">
																<img src="{{$data}}" alt="{{$data}}">
															</div>
														@endforeach
													</div>
												</div>
											<!-- End Product slider -->
										</div>
										<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
											<div class="quickview-content">
												<h2>{{$product->title}}</h2>
												<div class="quickview-ratting-review">
													<div class="quickview-ratting-wrap">
														<div class="quickview-ratting">
															{{-- <i class="yellow fa fa-star"></i>
															<i class="yellow fa fa-star"></i>
															<i class="yellow fa fa-star"></i>
															<i class="yellow fa fa-star"></i>
															<i class="fa fa-star"></i> --}}
															@php
																$rate=DB::table('product_reviews')->where('product_id',$product->id)->avg('rate');
																$rate_count=DB::table('product_reviews')->where('product_id',$product->id)->count();
															@endphp
															@for($i=1; $i<=5; $i++)
																@if($rate>=$i)
																	<i class="yellow fa fa-star"></i>
																@else 
																<i class="fa fa-star"></i>
																@endif
															@endfor
														</div>
														<a href="#"> ({{$rate_count}} customer review)</a>
													</div>
													<div class="quickview-stock">
														@if($product->stock >0)
														<span><i class="fa fa-check-circle-o"></i> {{$product->stock}} in stock</span>
														@else 
														<span><i class="fa fa-times-circle-o text-danger"></i> {{$product->stock}} out stock</span>
														@endif
													</div>
												</div>
												@php
													$after_discount=($product->price-($product->price*$product->discount)/100);
												@endphp
												<h3><small><del class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
													<path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z"/>
												  </svg>{{number_format($product->price,2)}}</del></small> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-rupee" viewBox="0 0 16 16">
													<path d="M4 3.06h2.726c1.22 0 2.12.575 2.325 1.724H4v1.051h5.051C8.855 7.001 8 7.558 6.788 7.558H4v1.317L8.437 14h2.11L6.095 8.884h.855c2.316-.018 3.465-1.476 3.688-3.049H12V4.784h-1.345c-.08-.778-.357-1.335-.793-1.732H12V2H4v1.06Z"/>
												  </svg>{{number_format($after_discount,2)}}  </h3>
												<div class="quickview-peragraph">
													<p>{!! html_entity_decode($product->summary) !!}</p>
												</div>
												@if($product->size)
													<div class="size">
														<h4>Size</h4>
														<ul>
															@php 
																$sizes=explode(',',$product->size);
																// dd($sizes);
															@endphp
															@foreach($sizes as $size)
															<li><a href="#" class="one">{{$size}}</a></li>
															@endforeach
														</ul>
													</div>
												@endif
												<form action="{{route('single-add-to-cart')}}" method="POST">
													@csrf 
													<div class="quantity">
														<!-- Input Order -->
														<div class="input-group">
															<div class="button minus">
																<button type="button" class="btn btn-primary btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
																	<i class="ti-minus"></i>
																</button>
															</div>
															<input type="hidden" name="slug" value="{{$product->slug}}">
															<input type="text" name="quant[1]" class="input-number"  data-min="1" data-max="1000" value="1">
															<div class="button plus">
																<button type="button" class="btn btn-primary btn-number" data-type="plus" data-field="quant[1]">
																	<i class="ti-plus"></i>
																</button>
															</div>
														</div>
														<!--/ End Input Order -->
													</div>
													<div class="add-to-cart">
														<button type="submit" class="btn">Add to cart</button>
														<a href="{{route('add-to-wishlist',$product->slug)}}" class="btn min"><i class="ti-heart"></i></a>
													</div>
												</form>
												<div class="default-social">
												<!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
			@endforeach
		@endif
			<!-- Modal end -->
@endsection
@push ('styles')
<style>
	 .pagination{
        display:inline-flex;
    }
	.filter_button{
        /* height:20px; */
        text-align: center;
        background:#F7941D;
        padding:8px 16px;
        margin-top:10px;
        color: white;
    }
</style>
@endpush
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    {{-- <script>
        $('.cart').click(function(){
            var quantity=1;
            var pro_id=$(this).data('id');
            $.ajax({
                url:"{{route('add-to-cart')}}",
                type:"POST",
                data:{
                    _token:"{{csrf_token()}}",
                    quantity:quantity,
                    pro_id:pro_id
                },
                success:function(response){
                    console.log(response);
					if(typeof(response)!='object'){
						response=$.parseJSON(response);
					}
					if(response.status){
						swal('success',response.msg,'success').then(function(){
							document.location.href=document.location.href;
						});
					}
					else{
                        swal('error',response.msg,'error').then(function(){
							// document.location.href=document.location.href;
						}); 
                    }
                }
            })
        });
	</script> --}}
	<script>
        $(document).ready(function(){
        /*----------------------------------------------------*/
        /*  Jquery Ui slider js
        /*----------------------------------------------------*/
        if ($("#slider-range").length > 0) {
            const max_value = parseInt( $("#slider-range").data('max') ) || 500;
            const min_value = parseInt($("#slider-range").data('min')) || 0;
            const currency = $("#slider-range").data('currency') || '';
            let price_range = min_value+'-'+max_value;
            if($("#price_range").length > 0 && $("#price_range").val()){
                price_range = $("#price_range").val().trim();
            }
            
            let price = price_range.split('-');
            $("#slider-range").slider({
                range: true,
                min: min_value,
                max: max_value,
                values: price,
                slide: function (event, ui) {
                    $("#amount").val(currency + ui.values[0] + " -  "+currency+ ui.values[1]);
                    $("#price_range").val(ui.values[0] + "-" + ui.values[1]);
                }
            });
            }
        if ($("#amount").length > 0) {
            const m_currency = $("#slider-range").data('currency') || '';
            $("#amount").val(m_currency + $("#slider-range").slider("values", 0) +
                "  -  "+m_currency + $("#slider-range").slider("values", 1));
            }
        })
    </script>

@endpush

