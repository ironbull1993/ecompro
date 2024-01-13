
<?php use App\Models\Cart;
use App\Models\Product; ?>
<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />

      


   </head>


   <body>
      
         <!-- header section strats -->
         @include('home.header')
                <!-- end header section -->
         <!-- slider section -->
        
         <!-- end slider section -->
      
      <!-- why section -->
     
      <!-- end why section -->
      
      <!-- arrival section -->
   
      <!-- end arrival section -->
      
      <!-- product section -->
     
      <!-- end product section -->


      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="multikart">
        <meta name="keywords" content="multikart">
        <meta name="author" content="multikart">
        <link rel="icon" href="../assets/images/favicon/1.png" type="image/x-icon">
        <link rel="shortcut icon" href="../assets/images/favicon/1.png" type="image/x-icon">
        <title>Product Detail Page</title>
    
        <!--Google font-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    
        <!-- Icons -->
        <link rel="stylesheet" type="text/css" href="../assets/css/fontawesome.css">
    
        <!--Slick slider css-->
        <link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
        <link rel="stylesheet" type="text/css" href="../assets/css/slick-theme.css">
    
        <!-- Animate icon -->
        <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    
        <!-- Themify icon -->
        <link rel="stylesheet" type="text/css" href="../assets/css/themify-icons.css">
    
    
        <!-- Theme css -->
        <link rel="stylesheet" type="text/css" href="../assets/css/color1.css" media="screen" id="color">
    
    </head>
        <!-- section start -->
        <section>
            <div class="collection-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-sm-10 col-xs-12">
                            <div class="product-right-slick">
                                <div><img src="/product/{{$product->image}}" alt=""
                                        class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                                
                            </div>
                        </div>
                        <div class="col-lg-1 col-sm-2 col-xs-12">
                            <div class="row">
                                <div class="col-12 p-0">
                                    <div class="slider-right-nav">
                                        
                                        
                                        <div style="margin-top: 15px;"><img src="/product/{{$product->image}}" alt=""
                                                class="img-fluid blur-up lazyload"></div><div style="margin-top: 15px;"><img src="/product/{{$product->image}}" alt=""
                                                class="img-fluid blur-up lazyload"></div><div style="margin-top: 15px;"><img src="/product/{{$product->image}}" alt=""
                                                class="img-fluid blur-up lazyload"></div>
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 rtl-text">
                            <div class="product-right">
                                <h2>{{ $product->title }}</h2>

                                @if($product->discount_price!=null)

                                <h4><del>Tsh {{ $product->price }}</del><span>{{ number_format((($product->price)-($product->discount_price))/$product->price*100,0) }}% off</span></h4>
                                <h3 style="color: red">Now at Tsh {{ $product->discount_price }}</h3>

                                @else

                                <h3 style="color: black">Tsh {{ $product->price }}</h3>
                                @endif
                                
                                    
                                    <h6 class="product-title">Stock {{ $product->quantity }}</h6>
                                    
                                </div>
                                <form action="{{ url('add_cart',$product->id) }}" method="post" >
                                    @csrf
                                    @if(Cart::where('product_id',$product->id)->exists())
                                    <h6 style="text-align:center !important;border:solid;background-color:white;border-radius:30px;margin-top:10px;width:170px;" class="">
                                        Added to cart
                                      </h6>
                                    @else
                                  <div class="input-group quantity-selector quantity-selector-sm">
                                    <input type="number" id="inputQuantitySelectorSm" class="form-control" aria-live="polite" style="flex:none;height:15%;width: 90px;border-radius:35px;border-color:black;text-align:center" placeholder="Quantity" data-bs-step="counter" name="quantity" title="quantity" value="1" min="1"  step="1" data-bs-round="0" aria-label="Quantity selector">
                                    
                                  </div>
                                 
                                 
                             <br>
                                  <button type="submit" style="border:solid;border-radius:30px;background-color:transparent" value="Add to cart">
                                  <a  class="option2">
                                  Add to cart
                                  </a></button>
                                @endif
                                  </form>
                                <div class="border-product">
                                    <h6 class="product-title"><b>product details</b></h6>
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section ends -->
       
   
    
      <!-- subscribe section -->
     
      <!-- end subscribe section -->
      <!-- client section -->
      
      <!-- end client section -->
      <!-- footer start -->
      <div style="margin-top: 15px;">
      @include('home.footer')
      </div>
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>