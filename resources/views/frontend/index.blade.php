@extends('frontend.layouts.master')
@section('title','E-Mart || Home')
@section('main-content')


<!-- Slider Area -->
@if(count($banners)>0)
    <section id="Gslider" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($banners as $key=>$banner)
        <li data-target="#Gslider" data-slide-to="{{$key}}" class="{{(($key==0)? 'active' : '')}}"></li>
            @endforeach

        </ol>
        <div class="carousel-inner" role="listbox">
                @foreach($banners as $key=>$banner)
                <div class="carousel-item {{(($key==0)? 'active' : '')}}">
                    <img class="first-slide" src="{{$banner->photo}}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block text-left">
                        <h1 class="wow fadeInDown">{{$banner->title}}</h1>
                        <p>{!! html_entity_decode($banner->description) !!}</p>
                        <a class="btn btn-lg ws-btn wow fadeInUpBig" href="{{route('product-grids')}}" role="button">Shop Now <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg><i class="far fa-arrow-alt-circle-right"></i></i></a>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#Gslider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#Gslider" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </section>
@endif

  {{-- <!-- Single Widget -->
  <div class="single-widget recent-post">
    <h3 class="title">Recently Viewed</h3>

   

    {{-- {{dd($recent_products)}} --}}
    @isset($recent_products)

    @foreach($recent_products as $product)
        <!-- Single Post -->
        @php
            $photo=explode(',',$product->photo);
        @endphp
       

            <div class="image">
                <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
            </div>
            <div class="content">
                <h5><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h5>
                @php
                    $org=($product->price-($product->price*$product->discount)/100);
                @endphp
                <p class="price"><del class="text-muted">₹{{number_format($product->price,2)}}</del>   ₹{{number_format($org,2)}}  </p>

            </div>
        </div>
        <!-- End Single Post -->
    @endforeach
    @endisset
</div> 

<!--/ End Slider Area -->

<!-- Start Small Banner  -->
<section class="small-banner section">
    <div class="container-fluid">
        <div class="row">
            @php
            $category_lists=DB::table('categories')->where('status','active')->limit(6)->get();
            @endphp
            @if($category_lists)
                @foreach($category_lists as $cat)
                    @if($cat->is_parent==1)
                        <!-- Single Banner  -->
                        <div class="col-lg-4 col-md-6 col-6">
                            <div class="single-banner">
                                @if($cat->photo)
                                    <img src="{{$cat->photo}}" alt="{{$cat->photo}}">
                                @else
                                    <img src="https://placehold.co/600x400" alt="#">
                                @endif
                                <div class="content">
                                    <h3>{{$cat->title}}</h3>
                                        <a href="{{route('product-cat',$cat->slug)}}">Discover Now</a>
                                </div>
                            </div>
                        </div>
                    @endif
                    <!-- /End Single Banner  -->
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Small Banner -->



<br>
<br>

<div class="container">    
  
    <img alt="" src="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/0384ab9c-1a1c-4769-b6f4-936c9538a65a._CR0,0,2500,525_AC_SX130_SY60_QL70_.png" srcset="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/0384ab9c-1a1c-4769-b6f4-936c9538a65a._CR0,0,2500,525_AC_SX130_SY60_QL70_.png 1x,https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/0384ab9c-1a1c-4769-b6f4-936c9538a65a._CR0,0,2500,525_AC_SX260_SY120_QL70_.png 2x" sizes="" class="_bGlmZ_image_1pfbQ"> &nbsp; &nbsp;  <img alt="" src="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/9a76a469-51bd-4fc8-859e-341a6d33af74._CR0,0,512,512_AC_SX130_SY60_AGmerlin_QL70_.png" srcset="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/9a76a469-51bd-4fc8-859e-341a6d33af74._CR0,0,512,512_AC_SX130_SY60_AGmerlin_QL70_.png 1x,https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/9a76a469-51bd-4fc8-859e-341a6d33af74._CR0,0,512,512_AC_SX260_SY120_AGmerlin_QL70_.png 2x" sizes="" class="_c2xpZ_image_1pfbQ"> <br> <br>

    <div class="card">
        <div class="card-body">
             1.91" Stainless Steel Luxe, Bluetooth Calling1.91" Stainless Steel Luxe, Bluetooth Calling
            <br>     
            <a href="/product-sub-cat/smartphones/apple" class="link-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
              </svg> <B> Shop Men's Watches > </B> </a>
        </div>
      </div>

    {{-- <span class="a-truncate-cut" aria-hidden="true" style="height: auto;">Stay productive with the Apple products you love.</span>
   
    <br>
    <br>
    <a href="product-brand/apple" class="link-primary">   Shop Apple > </a>
     <br>
     <br> --}}

     <br>
     <br>

     

     <div class="card mb-3">
        <img class="card-img-top" src="/storage/photos/1/Products/ms.png" alt="Card image cap">   
      </div>
      
      <br>

    <div class="card-group">
    
        <div class="card">
         
           
          <img class="card-img-top" src="/storage/photos/1/Products/sa2.jpg" alt="Card image cap">
          <div class="card-body">
            <br>
            <br>
                <h5 class="card-title"> Men's Leather Watches </h5> 	
                							                     
                <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> Wrist Watches  </p>
    
                  <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> Fashion SmartPhones </p>
    
                

                          <hr>

                          <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg> <a href="product-sub-cat/watches/stainless-steel-watches">  View Products  </a> </p>

                     
          </div>
        </div>


        <div class="card">
          <img class="card-img-top" src="/storage/photos/1/Products/sa1.jpg" alt="Card image cap">
          <div class="card-body">
            <br>
            <br>
            
            <h5 class="card-title"> Men's Stainless Steel Watches  </h5>

            <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg> Wrist Watches  </p>

              <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg> Fashion SmartPhones </p>

             
              <hr>

              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg> <a href="product-sub-cat/watches/leather-watches"> View Products </a> </p>
           
          </div>
        </div>

      

         
       
      </div>
    
    <br>
    <br>

    <div class="container">    
   
        <img alt="" src="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/54ea31bd-919f-455e-95bd-1e3d95e419ab._CR0,0,400,400_AC_SX130_SY60_QL70_.png" srcset="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/54ea31bd-919f-455e-95bd-1e3d95e419ab._CR0,0,400,400_AC_SX130_SY60_QL70_.png 1x,https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/54ea31bd-919f-455e-95bd-1e3d95e419ab._CR0,0,400,400_AC_SX260_SY120_QL70_.png 2x" sizes="" class="_bXVsd_image_1pfbQ"> &nbsp; &nbsp; <img alt="" src="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/fee8c3bc-b408-4b9e-ab3c-868a27278352._CR0,0,400,400_AC_SX130_SY60_QL70_.jpg" srcset="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/fee8c3bc-b408-4b9e-ab3c-868a27278352._CR0,0,400,400_AC_SX130_SY60_QL70_.jpg 1x,https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/fee8c3bc-b408-4b9e-ab3c-868a27278352._CR0,0,400,400_AC_SX260_SY120_QL70_.jpg 2x" sizes="" class="_bGlmZ_image_1pfbQ"> <br> <br>
       
        <div class="card">
            <div class="card-body">
                Stay productive with the Apple products you love.
                <br>     
                <a href="/product-sub-cat/smartphones/apple" class="link-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                  </svg> <b> Shop Men's Fashion > </b> </a>
            </div>
          </div>
    
        {{-- <span class="a-truncate-cut" aria-hidden="true" style="height: auto;">Stay productive with the Apple products you love.</span>
       
        <br>
        <br>
        <a href="product-brand/apple" class="link-primary">   Shop Apple > </a>
         <br>
         <br> --}}
    
         <br>
         <br>
    
         
    
         <div class="card mb-3">
            <img class="card-img-top" src="/storage/photos/1/Products/virat.png" alt="Card image cap">   
          </div>
          
          <br>
    
        <div class="card-group">
        
            <div class="card">
             
               
              <img class="card-img-top" src="/storage/photos/1/Products/skyblue-mens-formal-shirt1.jpg" alt="Card image cap">
              <div class="card-body">
                <br>
                <br>
                    <h5 class="card-title"> Men's Top Wear  </h5> 	
                                                                     
                    {{-- <p class="card-text">See more from Android SmartPhones in their E-Mart Online</p> --}}
                              <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                              </svg> Men's Casual Shirts </p>
    
                              <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                              </svg> Men's Formal Shirts </p>
    
                              <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                              </svg> Men's T-Shirts </p>
    
                    
    
                              <hr>
    
                              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                              </svg> <a href="product-sub-cat/mens-fashion/casual-shirts-for-men">  View Products  </a> </p>
    
                         
              </div>
            </div>
    
    
            <div class="card">
              <img class="card-img-top" src="/storage/photos/1/Products/bottom3.jpg" alt="Card image cap">
              <div class="card-body">
                
                <h5 class="card-title"> Men's Bottom Wear  </h5>
    
                <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> Men's Jeans </p>
    
                  <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> Men's Trackpants </p>
    
                  <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> Men's Cargos </p>
    
                  <hr>
    
                  <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> <a href=""> View Products </a> </p>
               
              </div>
            </div>
    
            <div class="card">
                <img class="card-img-top" src="/storage/photos/1/black-color-formal-wear-leather-loafer-shoes-for-mens-with-comfortable-and-pu-insole-520.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> Men's FootWear </h5>
    
                <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> Men's Sports Shoes </p>
    
                  <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> Men's Casual Shoes </p>
    
                  <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> Men's Sandals & Floaters </p>
    
    
                  <hr>
    
                  <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> <a href="">  View Products  </a> </p>
    
                </div>
              </div>
    
             
           
          </div>
        
        <br>
        <br>

<div class="container">    
        
    <img alt="" src="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/e0afa597-5ff3-49f1-a9ba-8b07113297f1._CR0,0,400,400_AC_SX130_SY60_QL70_.png" srcset="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/e0afa597-5ff3-49f1-a9ba-8b07113297f1._CR0,0,400,400_AC_SX130_SY60_QL70_.png 1x,https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/e0afa597-5ff3-49f1-a9ba-8b07113297f1._CR0,0,400,400_AC_SX260_SY120_QL70_.png 2x" sizes="" class="_YXV0b_image_1pfbQ">   <br><br>
   
    <div class="card">
        <div class="card-body">
            Stay productive with the Apple products you love.
            <br>     
            <a href="/product-sub-cat/smartphones/apple" class="link-primary"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
              </svg>   <b> Shop Apple >  </b> </a>
        </div>
      </div>

    {{-- <span class="a-truncate-cut" aria-hidden="true" style="height: auto;">Stay productive with the Apple products you love.</span>
   
    <br>
    <br>
    <a href="product-brand/apple" class="link-primary">   Shop Apple > </a>
     <br>
     <br> --}}

     <br>
     <br>

     <div class="card mb-3">
        <img class="card-img-top" src="/storage/photos/1/Products/iphone-14-model-unselect-gallery-2-202303_GEO_EMEA_FMT_WHH.jpg" alt="Card image cap">   
      </div>
      
      <br>

    <div class="card-group">
    
        <div class="card">
         
           
          <img class="card-img-top" src="/storage/photos/1/Products/i15.jpg" alt="Card image cap">
          <div class="card-body">
            <p>Apple</p>
                <h5 class="card-title"> iPhone 15 Pro Max   </h5> 								                     
                {{-- <p class="card-text">See more from Android SmartPhones in their E-Mart Online</p> --}}
                <hr>
               
                         <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg> <a href="/product-sub-cat/smartphones/apple"> Product View </a> </p>                  
            <p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg> See more from Apple SmartPhones in their E-Mart Online</p>
            
           

            {{-- @if(isset($product->brand))
            <p>Brand: {{ $product->brand->title }}</p>
        @endif --}}

            {{-- <li> <a href="product-brand/apple" class="link-primary">  Shop Apple > </a></li>  --}}
            
          
      
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="storage/photos/1/Products/i14.jpg" alt="Card image cap">
          <div class="card-body">
            <p>Apple</p>
            <h5 class="card-title"> iPhone 14 Pro Max</h5>
            <hr>
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg> <a href="/product-sub-cat/smartphones/apple"> Product View </a> </p>                  
<p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </svg> See more from Apple SmartPhones in their E-Mart Online</p>

          </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="storage/photos/1/Products/i14p.jpg" alt="Card image cap">
            <div class="card-body">
                <p>Apple</p>
              <h5 class="card-title"> iPhone 14 Plus</h5>
              <hr>
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg> <a href="/product-sub-cat/smartphones/apple"> Product View </a> </p>                  
<p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </svg> See more from Apple SmartPhones in their E-Mart Online</p>

            </div>
          </div>

          <div class="card">
            <img class="card-img-top" src="storage/photos/1/Products/i13p.jpg" alt="Card image cap">
            <div class="card-body">
                <p>Apple</p>
              <h5 class="card-title">iPhone 13 Plus</h5>
              <hr>
              <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
              </svg> <a href="/product-sub-cat/smartphones/apple"> Product View</a> </p>                  
<p class="card-text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
  </svg> See more from Apple SmartPhones in their E-Mart Online</p>

            </div>
          </div>
       
      </div>
    </div>
    
    <br>
    <br>

    <div class="container">    
        
        <img alt="" src="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/4c453d82-622d-43d8-96c9-3942b6def244._CR0,0,400,400_AC_SX130_SY60_QL70_.png" srcset="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/4c453d82-622d-43d8-96c9-3942b6def244._CR0,0,400,400_AC_SX130_SY60_QL70_.png 1x,https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/4c453d82-622d-43d8-96c9-3942b6def244._CR0,0,400,400_AC_SX260_SY120_QL70_.png 2x" sizes="" class="_bXVsd_image_1pfbQ"> <span> &nbsp; &nbsp;  <img alt="" src="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/6f64ea8e-2ad0-4378-8d5d-643c72ff311d._CR0,0,400,400_AC_SX130_SY60_QL70_.png" srcset="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/6f64ea8e-2ad0-4378-8d5d-643c72ff311d._CR0,0,400,400_AC_SX130_SY60_QL70_.png 1x,https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/6f64ea8e-2ad0-4378-8d5d-643c72ff311d._CR0,0,400,400_AC_SX260_SY120_QL70_.png 2x" sizes="" class="_bGlmZ_image_1pfbQ"> </span> <span> &nbsp;  &nbsp;  <img alt="" src="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/a719f6e4-e213-49eb-aff2-2f1a0d0f9171._CR0,0,1000,1000_AC_SX130_SY60_QL70_.png" srcset="https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/a719f6e4-e213-49eb-aff2-2f1a0d0f9171._CR0,0,1000,1000_AC_SX130_SY60_QL70_.png 1x,https://m.media-amazon.com/images/S/al-eu-726f4d26-7fdb/a719f6e4-e213-49eb-aff2-2f1a0d0f9171._CR0,0,1000,1000_AC_SX260_SY120_QL70_.png 2x" sizes="" class="_bGlmZ_image_1pfbQ"> </span> <br><br>
        <div class="card">
            <div class="card-body">
                       Great Festive Deals on SmartPhones
                <br>
                
                <a href="product-sub-cat/smartphones/android-phone" class="link-primary"> <ul> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-plus" viewBox="0 0 16 16">
                    <path d="M9 5.5a.5.5 0 0 0-1 0V7H6.5a.5.5 0 0 0 0 1H8v1.5a.5.5 0 0 0 1 0V8h1.5a.5.5 0 0 0 0-1H9z"/>
                    <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0m7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                  </svg>  <b> Shop Android SmartPhones >  </b> </ul> </a>
            </div>
          </div>
    
        {{-- <span class="a-truncate-cut" aria-hidden="true" style="height: auto;">Stay productive with the Apple products you love.</span>
       
        <br>
        <br>
        <a href="product-brand/apple" class="link-primary">   Shop Apple > </a>
         <br>
         <br> --}}
    
         <br>
         <br>
    
    

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="/storage/photos/1/Banner/s23.png" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                <h5>Samsung</h5>
                <h6><a href="/product-detail/samsung-galaxy-s23-ultra-5g-green-12gb-256gb-storage">Samsung Galaxy S23 Ultra 5G (Green, 12GB, 256GB Storage) </a> </h6>
                </div>
            
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="storage/photos/1/Banner/realme.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Realme</h5>
                    <h6><a href="/product-detail/realme-narzo-50-pro-5g-hyper-black-6gb-ram128gb-storage-dimensity-920-5g-processor-90hz-super-amoled-display">Realme Narzo 50 Pro 5G</a> </h6>
                    </div>
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="storage/photos/1/Banner/oneplus.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Oneplus</h5>
                    <h6><a href="/product-detail/oneplus-11r-5g-sonic-black-16gb-ram-256gb-storage">OnePlus 11R 5G (Sonic Black, 16GB RAM, 256GB Storage) </a> </h6>
                    </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <br>
          <br>
    
        <div class="card-group">
        
            <div class="card">
             
               
              <img class="card-img-top" src="/storage/photos/1/Products/s1.jpg" alt="Card image cap">
              <div class="card-body">
                <p>Samsung</p>
                <h5 class="card-title">  Samsung Galaxy S23 Ultra 5G  </h5> 								                     
                {{-- <p class="card-text">See more from Android SmartPhones in their E-Mart Online</p> --}}
               <hr>
                         <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                          </svg> <a href="/product-detail/samsung-galaxy-s23-ultra-5g-green-12gb-256gb-storage"> Product View </a> </p> 
               
          
                {{-- @if(isset($product->brand))
                <p>Brand: {{ $product->brand->title }}</p>
            @endif --}}
    
                {{-- <li> <a href="product-brand/apple" class="link-primary">  Shop Apple > </a></li>  --}}
                
          
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="/storage/photos/1/Products/r1.jpg" alt="Card image cap">
              <div class="card-body">
                <p> Realme </p>
                <h5 class="card-title"> Realme Narzo 50 Pro 5G  </h5>
                <hr>
                <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> <a href="/product-detail/realme-narzo-50-pro-5g-hyper-black-6gb-ram128gb-storage-dimensity-920-5g-processor-90hz-super-amoled-display"> Product View </a> </p> 
       
 
             
              </div>
            </div>
    
            <div class="card">
                <img class="card-img-top" src="/storage/photos/1/Products/o1.jpg" alt="Card image cap">
                <div class="card-body">
                    <p> Oneplus </p>
                  <h5 class="card-title"> OnePlus 11R 5G </h5>
                  <hr>
                  <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> <a href="/product-detail/oneplus-11r-5g-sonic-black-16gb-ram-256gb-storage"> Product View </a> </p> 
       
 
               
                </div>
              </div>
    
              <div class="card">
                <img class="card-img-top" src="/storage/photos/1/Banner/71OVC3S4f7L._SL1500_.jpg" alt="Card image cap">
                <div class="card-body">
                    <p> Samsung </p>
                  <h5 class="card-title">Samsung Galaxy M13</h5>
                  <hr>
                  <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg> <a href="/product-detail/oneplus-11r-5g-sonic-black-16gb-ram-256gb-storage">Product View</a> </p> 
       
 
               
                </div>
              </div>
           
          </div>
        </div>
    
        <br>
        <br>
    


<!-- Start Shop Home List  -->
<section class="shop-home-list section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-section-title">
                            <h1>Products View</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                        $product_lists=DB::table('products')->where('status','active')->orderBy('id','DESC')->limit(100)->get();
                    @endphp
                    @foreach($product_lists as $product)
                        <div class="col-md-4">
                            <!-- Start Single List  -->
                            <div class="single-list">
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="list-image overlay">
                                        @php
                                            $photo=explode(',',$product->photo);
                                            // dd($photo);
                                        @endphp
                                        <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        <a href="{{route('add-to-cart',$product->slug)}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 no-padding">
                                    @if(isset($product->brand))
                                    <p>Brand: {{ $product->brand->title }}</p>
                                @endif
                                    <div class="content"> 
                                        
                                        <h4 class="title"><a href="{{route('add-to-cart',$product->slug)}}">{{$product->title}}</a></h4>
                                       
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- End Single List  -->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<center>
<!-- Ads Banner-->
<div class="container">
<a href="http://127.0.0.1:8000/">
	<div class="banner">
        
        <img src="images/Blue Pink Modern Special Offer Sale Banner.png">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <h5> E-Mart Advertisement</h5>
		<div class="panel panel1">
			
		</div>
	   
	    
	</div>
    </a>
  </body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js'></script>
</div>
</center>

  <style>

.banner {
  position: relative;
  white-space:nowrap;
  overflow: hidden;
  width: 570px;
  height: 250px; 
  border: 1px solid black;
}

.panel {

  position: absolute;
  background: white;
}

.panel1 {
	top:-250px;
}

.panel2, .panel3{
	opacity:0;
}

#imageMove2, #imageMove3 {
	position:absolute;
	left:-970px;
}

#textMove2, #textMove3 {
	position:absolute;
	right:-970px;
}

#textMove4 {
	position:absolute;
}

#imageTable_1 {
	position:absolute;
	left:0px;
	top:0px;
}

  </style>

  


<!-- Start Product Area -->
<div class="product-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Product</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-info">
                        <div class="nav-main">
                            <!-- Tab Nav -->
                            <ul class="nav nav-tabs filter-tope-group" id="myTab" role="tablist">
                                @php
                                    $categories=DB::table('categories')->where('status','active')->where('is_parent',1)->get();
                                    
                                    // dd($categories);
                                @endphp
                                @if($categories)
                                <button class="btn" style="background:black"data-filter="*">
                                    All Products
                                </button>
                                    @foreach($categories as $key=>$cat)

                                    <button class="btn" style="background:none;color:black;"data-filter=".{{$cat->id}}">
                                        
                                        {{$cat->title}}
                                    </button>
                                    @endforeach
                                @endif
                            </ul>
                            <!--/ End Tab Nav -->
                        </div>
                        <div class="tab-content isotope-grid" id="myTabContent">
                             <!-- Start Single Tab -->
                            @if($product_lists)
                                @foreach($product_lists as $key=>$product)
                                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item {{$product->cat_id}}">
                                    <div class="single-product">
                                        <div class="product-img">
                                            @if(isset($product->brand))
															<p>Brand: {{ $product->brand->title }}</p>
														@endif
                                            <a href="{{route('product-detail',$product->slug)}}">
                                                @php
                                                    $photo=explode(',',$product->photo);
                                                // dd($photo);
                                                @endphp
                                                <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                                <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                                @if($product->stock<=0)
                                                    <span class="out-of-stock">Sale out</span>
                                                @elseif($product->condition=='new')
                                                    <span class="new">New</span
                                                @elseif($product->condition=='hot')
                                                    <span class="hot">Hot</span>
                                                @else
                                                    <span class="price-dec">{{$product->discount}}% Off</span>
                                                @endif


                                            </a>
                                            <div class="button-head">
                                                <div class="product-action">
                                                    <a data-toggle="modal" data-target="#{{$product->id}}" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
                                                    <a title="Wishlist" href="{{route('add-to-wishlist',$product->slug)}}" ><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
                                                </div>
                                                <div class="product-action-2">
                                                    <a title="Add to cart" href="{{route('add-to-cart',$product->slug)}}">Add to cart</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            
                                            <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                                            
                                            <div class="product-price">
                                                @php
                                                    $after_discount=($product->price-($product->price*$product->discount)/100);
                                                @endphp
                                                <span class="text-danger">₹{{number_format($after_discount,2)}}</span>
                                                <del>₹{{number_format($product->price,2)}}</del>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                             <!--/ End Single Tab -->
                            @endif

                        <!--/ End Single Tab -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- End Product Area -->
{{-- @php
    $featured=DB::table('products')->where('is_featured',1)->where('status','active')->orderBy('id','DESC')->limit(1)->get();
@endphp --}}
<!-- Start Midium Banner  -->
<section class="midium-banner">
    <div class="container">
        <div class="row">
            @if($featured)
                @foreach($featured as $data)
                    <!-- Single Banner  -->
                    <div class="col-lg-6 col-md-6 col-6">
                        <div class="single-banner">
                            @php
                                $photo=explode(',',$data->photo);
                            @endphp
                            <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                           
                        </div>
                    </div>
                    <div class="content col">
                        {{-- <p><a href="{{$data->cat_info['title']}}"</a></p> --}}
                        {{-- <h2><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h2> --}}
                        
                        <h6>{{$data->title}} <br><br>Up to<span> {{$data->discount}}%</span></h6>
                        <br>
                        <button class="btn btn-primary"> <a href="{{route('product-detail',$data->slug)}}"> Shop Now </a></button>
                        <br>
                    </div>
                    <!-- /End Single Banner  -->
                @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Midium Banner -->

<!-- Start Most Popular -->
<div class="product-area most-popular section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Product Item</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel popular-slider">
                    @foreach($product_lists as $product)
                        @if($product->condition=='hot')
                            <!-- Start Single Product -->
                        <div class="single-product">
                            <div class="product-img">
                                <a href="{{route('product-detail',$product->slug)}}">
                                    @php
                                        $photo=explode(',',$product->photo);
                                    // dd($photo);
                                    @endphp
                                    <img class="default-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                    <img class="hover-img" src="{{$photo[0]}}" alt="{{$photo[0]}}">
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
                                <h3><a href="{{route('product-detail',$product->slug)}}">{{$product->title}}</a></h3>
                                <div class="product-price">
                                    {{-- <span class="old">₹{{number_format($product->price,2)}}</span> --}}
                                    <span class="text-danger">₹{{number_format($after_discount,2)}}</span>
                                    @php
                                    $after_discount=($product->price-($product->price*$product->discount)/100)
                                    @endphp
                                    {{-- <span class="text-danger">₹{{number_format($after_discount,2)}}</span> --}}
                                    <span class="old">₹{{number_format($product->price,2)}}</span>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Most Popular Area -->

{{-- <!-- Start Shop Home List  -->
<section class="shop-home-list section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-section-title">
                            <h1>Products View</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @php
                        $product_lists=DB::table('products')->where('status','active')->orderBy('id','DESC')->limit(100)->get();
                    @endphp
                    @foreach($product_lists as $product)
                        <div class="col-md-4">
                            <!-- Start Single List  -->
                            <div class="single-list">
                                <div class="row">
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="list-image overlay">
                                        @php
                                            $photo=explode(',',$product->photo);
                                            // dd($photo);
                                        @endphp
                                        <img src="{{$photo[0]}}" alt="{{$photo[0]}}">
                                        <a href="{{route('add-to-cart',$product->slug)}}" class="buy"><i class="fa fa-shopping-bag"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12 no-padding">
                                    <div class="content">
                                        <h4 class="title"><a href="#">{{$product->title}}</a></h4>
                                       
                                    </div>
                                </div>
                                </div>
                            </div>
                            <!-- End Single List  -->
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- End Shop Home List  -->

<!-- Start Shop Blog  -->
<section class="shop-blog section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2>Customer Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @if($posts)
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-6 col-6">
                        <!-- Start Single Blog  -->
                        <div class="shop-single-blog">
                            <img src="{{$post->photo}}" alt="{{$post->photo}}">
                            <div class="content">
                                <p class="date">{{$post->created_at->format('d M , Y. D')}}</p>
                                <a href="{{route('blog.detail',$post->slug)}}" class="title">{{$post->title}}</a>
                                <a href="{{route('blog.detail',$post->slug)}}" class="more-btn">Continue Reading</a>
                            </div>
                        </div>
                        <!-- End Single Blog  -->
                    </div>
                @endforeach
            @endif

        </div>
    </div>
</section>
<!-- End Shop Blog  -->

<!-- Start Shop Services Area -->
<section class="shop-services section home">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-6">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-rocket"></i>
                    <h4>Free shiping</h4>
                    <p>Orders over ₹100</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-reload"></i>
                    <h4>Free Return</h4>
                    <p>Within 30 days returns</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-lock"></i>
                    <h4>Sucure Payment</h4>
                    <p>100% secure payment</p>
                </div>
                <!-- End Single Service -->
            </div>
            <div class="col-lg-3 col-md-6 col-6">
                <!-- Start Single Service -->
                <div class="single-service">
                    <i class="ti-tag"></i>
                    <h4>Best Price</h4>
                    <p>Guaranteed price</p>
                </div>
                <!-- End Single Service -->
            </div>
        </div>
 
</section>
<!-- End Shop Services Area -->

<br>
<br>

<!-- Modal -->
@if($product_lists)
    @foreach($product_lists as $key=>$product)
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
                                        <h3><small><del class="text-muted">₹{{number_format($product->price,2)}}</del></small>    ₹{{number_format($after_discount,2)}}  </h3>
                                        <div class="quickview-peragraph">
                                            <p>{!! html_entity_decode($product->summary) !!}</p>
                                        </div>
                                        @if($product->size)
                                            <div class="size">
                                                <div class="row">
                                                    <div class="col-lg-6 col-12">
                                                        <h5 class="title">Size</h5>
                                                        <select>
                                                            @php
                                                            $sizes=explode(',',$product->size);
                                                            // dd($sizes);
                                                            @endphp
                                                            @foreach($sizes as $size)
                                                                <option>{{$size}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    {{-- <div class="col-lg-6 col-12">
                                                        <h5 class="title">Color</h5>
                                                        <select>
                                                            <option selected="selected">orange</option>
                                                            <option>purple</option>
                                                            <option>black</option>
                                                            <option>pink</option>
                                                        </select>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        @endif
                                        <form action="{{route('single-add-to-cart')}}" method="POST" class="mt-4">
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
                                        {{-- <div class="default-social"> --}}
                                        {{-- <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END --> --}}
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

@push('styles')

    <style>
        /* Banner Sliding */
        #Gslider .carousel-inner {
        background: #000000;
        color:black;
        }

        #Gslider .carousel-inner{
       
        }
        #Gslider .carousel-inner img{
            width: 100% !important;
            height: 50% 
            
            opacity: .8;
        }

        #Gslider .carousel-inner .carousel-caption {
        bottom: 60%;
        }

        #Gslider .carousel-inner .carousel-caption h1 {
        font-size: 50px;
        font-weight: bold;
        line-height: 100%;
        color: #F7941D;
        }

        #Gslider .carousel-inner .carousel-caption p {
        font-size: 18px;
        color: black;
        margin: 28px 0 28px 0;
        }

        #Gslider .carousel-indicators {
        bottom: 70px;
        }
    </style>
@endpush

@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script>

        /*==================================================================
        [ Isotope ]*/
        var $topeContainer = $('.isotope-grid');
        var $filter = $('.filter-tope-group');

        // filter items on button click
        $filter.each(function () {
            $filter.on('click', 'button', function () {
                var filterValue = $(this).attr('data-filter');
                $topeContainer.isotope({filter: filterValue});
            });

        });

        // init Isotope
        $(window).on('load', function () {
            var $grid = $topeContainer.each(function () {
                $(this).isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'fitRows',
                    percentPosition: true,
                    animationEngine : 'best-available',
                    masonry: {
                        columnWidth: '.isotope-item'
                    }
                });
            });
        });

        var isotopeButton = $('.filter-tope-group button');

        $(isotopeButton).each(function(){
            $(this).on('click', function(){
                for(var i=0; i<isotopeButton.length; i++) {
                    $(isotopeButton[i]).removeClass('how-active1');
                }

                $(this).addClass('how-active1');
            });
        });
    </script>
    <script>
         function cancelFullScreen(el) {
            var requestMethod = el.cancelFullScreen||el.webkitCancelFullScreen||el.mozCancelFullScreen||el.exitFullscreen;
            if (requestMethod) { // cancel full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
        }

        function requestFullScreen(el) {
            // Supports most browsers and their versions.
            var requestMethod = el.requestFullScreen || el.webkitRequestFullScreen || el.mozRequestFullScreen || el.msRequestFullscreen;

            if (requestMethod) { // Native full screen.
                requestMethod.call(el);
            } else if (typeof window.ActiveXObject !== "undefined") { // Older IE.
                var wscript = new ActiveXObject("WScript.Shell");
                if (wscript !== null) {
                    wscript.SendKeys("{F11}");
                }
            }
            return false
        }
    </script>

@endpush