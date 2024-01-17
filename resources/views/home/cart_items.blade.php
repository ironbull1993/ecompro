
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
        <meta name="csrf-token" content="{{ csrf_token() }}" />
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
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
   
   <style>
    body{margin-top:20px;
    background:#eee;
}
h3 {
    font-size: 16px;
}
.text-navy {
    color: #1ab394;
}
.cart-product-imitation {
  text-align: center;
  padding-top: 30px;
  height: 80px;
  width: 80px;
  background-color: #f8f8f9;
}
.product-imitation.xl {
  padding: 120px 0;
}
.product-desc {
  padding: 20px;
  position: relative;
}
.ecommerce .tag-list {
  padding: 0;
}
.ecommerce .fa-star {
  color: #d1dade;
}
.ecommerce .fa-star.active {
  color: #f8ac59;
}
.ecommerce .note-editor {
  border: 1px solid #e7eaec;
}
table.shoping-cart-table {
  margin-bottom: 0;
}
table.shoping-cart-table tr td {
  border: none;
  text-align: right;
}
table.shoping-cart-table tr td.desc,
table.shoping-cart-table tr td:first-child {
  text-align: left;
}
table.shoping-cart-table tr td:last-child {
  width: 80px;
}
.ibox {
  clear: both;
  margin-bottom: 25px;
  margin-top: 0;
  padding: 0;
}
.ibox.collapsed .ibox-content {
  display: none;
}
.ibox:after,
.ibox:before {
  display: table;
}
.ibox-title {
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background-color: #ffffff;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 3px 0 0;
  color: inherit;
  margin-bottom: 0;
  padding: 14px 15px 7px;
  min-height: 48px;
}
.ibox-content {
  background-color: #ffffff;
  color: inherit;
  padding: 15px 20px 20px 20px;
  border-color: #e7eaec;
  border-image: none;
  border-style: solid solid none;
  border-width: 1px 0;
}
.ibox-footer {
  color: inherit;
  border-top: 1px solid #e7eaec;
  font-size: 90%;
  background: #ffffff;
  padding: 10px 15px;
}
    </style>
   
    </head>
        <!-- section start -->

       
<div class="container">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-9">
            <div class="ibox">
                <div class="ibox-title" >
                    <span  class="pull-right">(<strong id="cart-cnt">{{$cartcount}}</strong>) item(s)</span>
                    <h5>Items in your cart  </h5>
                </div>
                @foreach ($mycart as $mycart)
                <div class="ibox-content items" id="cart-{{$mycart->id}}">
                    <div class="table-responsive">
                        <table class="table shoping-cart-table">
                            <tbody>
                            <tr>
                                <td width="90">
                                    <div class="cart-product-imitation">
                                        <img src="/product/{{$mycart->image}}" alt="" width=90>
                                    </div>
                                </td>
                                <td class="desc">
                                    <h3 class="text-navy">
                                   
                                        {{$mycart->product_title}}
                                    
                                    </h3>
                                    <p class="small">
                                      <?php $myproduct=Product::where('id', $mycart->product_id)->first();
                                    echo $myproduct->description;
                                    ?>
                                    </p>
                                    

                                    <div class="m-t-sm">
                                        
                                        <form>
                                            @csrf
                                        <button type="submit"   data-id="{{$mycart->id}}" class="rmv-cart"><i class="fa fa-trash"></i> Remove item</button>
                                        </form>   
                                    </div>
                                </td>

                                <td>
                                  Tsh  {{($mycart->price)/($mycart->quantity)}}
                                    
                                </td>
                                <td width="105">
                                   
                                    <input type="number" id="qty-{{$mycart->id}}" class="form-control qty-cart" data-id="{{$mycart->id}}" placeholder="{{ $mycart->quantity }} " value="" min="1"  step="1" data-bs-round="0" >
                                </td>
                                <td id="crtprice-{{$mycart->id}}">
                                     
                                    <h4>
                                        Tsh  {{$mycart->price}}
                                    </h4>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
               @endforeach
                <div class="ibox-content">
                    @if($cartsum!=0)
                    <button id="chkoutid" class="btn btn-primary pull-right" style="color:black;" ><i class="fa fa fa-shopping-cart"></i><a style="color:black;" href="" data-toggle="modal" data-target="#modalContactForm"> Checkout</a></button>
                    @endif
                    <button class="btn btn-white" ><i class="fa fa-arrow-left"></i><a href="{{url('/')}}"> Continue shopping</a></button>

                </div>
            </div>

        </div>
        <div class="col-md-3">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Cart Summary</h5>
                </div>
                <div class="ibox-content">
                    <span>
                        Total
                    </span>
                    <h2 class="font-bold" id="total-cart">
                        Tsh {{$cartsum}}/=
                    </h2>

                    <hr>
                    <span class="text-muted small">
                        *For Kenya, Uganda and Rwanda applicable sales tax will be applied
                    </span>
                    <div class="m-t-sm">
                        <div class="btn-group">
                            @if($cartsum!=0)
                        <a href="" id="chkoutid1" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modalContactForm"><i class="fa fa-shopping-cart"></i> Checkout</a>
                            @endif
                        <button type="submit" data-id="" class="rmv-allcart" ><a href="" class="btn btn-white btn-sm"> Cancel</a></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="ibox">
                <div class="ibox-title">
                    <h5>Support</h5>
                </div>
                <div class="ibox-content text-center">
                    <h3><i class="fa fa-phone"></i> +255 743 997 716</h3>
                    <span class="small">
                        Please contact with us if you have any questions. We are avalible 24h.
                    </span>
                </div>
            </div>

            <div class="ibox">
                <div class="ibox-content">

                    <p class="font-bold">
                    Other products you may be interested
                    </p>
                    <hr>
                    <div>
                        <a href="#" class="product-name"> Product 1</a>
                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">

                            <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                    <hr>
                    <div>
                        <a href="#" class="product-name"> Product 2</a>
                        <div class="small m-t-xs">
                            Many desktop publishing packages and web page editors now.
                        </div>
                        <div class="m-t text-righ">

                            <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
        <!-- Section ends -->
       
   
    
      <!-- subscribe section -->
     
      <!-- end subscribe section -->
      <!-- client section -->
      
      <!-- end client section -->
      <!-- footer start -->
      <div style="margin-top: 15px;">
    
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Checkout Details</h4>
        <button type="button" id="clox" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="form34">Your name</label>
          <input type="text" id="name" class="form-control validate">
         
        </div>

        <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="form29">Your Phone</label>
            <input type="text" id="phone" class="form-control validate">
            
          </div>

        <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="form29">Your email</label>
          <input type="email" id="email" class="form-control validate">
          
        </div>

        <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="form32">Delivery address</label>
          <input type="text" id="address" class="form-control validate">
          
        </div>

        <div class="md-form">
            <label data-error="wrong" data-success="right" for="form8">Additional delivery Info</label>
          <textarea type="text" id="additional" class="md-textarea form-control" rows="4"></textarea>
          
        </div>

        <div class="md-form mb-5">
            <label data-error="wrong" data-success="right" for="form29">Cash on delivery</label>
            <input type="radio" id="cashs" name="cash" value="cash" class="form-control validate">
            <label data-error="wrong" data-success="right" for="form29">Mobile payments</label>
            <input type="radio" id="form29" name="cash" value="mobile" class="form-control validate">
            
          </div>

      </div>
      <div  class="modal-footer d-flex justify-content-center">
        <input type=submit id="chec" class="checkout" value="send">
    
      </div>
    </div>
  </div>
</div>


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
      <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
      <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        </script>
     <script>
        $('.rmv-cart').on('click', function(e) {
           e.preventDefault();
            var productId = $(this).attr('data-id');
            
           
            $.ajax({
                url: "{{ route('cart.rmv') }}",
                method: 'POST',
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                data: { id: productId},
                success: function(response) {
                
                    $('#cart-' + productId).empty();
                    $('#cart-cnt').html(response.message);
                    $('#total-cart').html('Tsh ' + response.message2);
                    $('#superscript').html(response.message3);
                    //alert(response.message);
                    if(response.message2=="0"){
                    $('#chkoutid').hide();
                    $('#chkoutid1').hide();
                   }
                    
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
            });
        });




        $('.rmv-allcart').on('click', function(e) {
           e.preventDefault();
            //var userId = $(this).attr('data-id');
            
           
            $.ajax({
                url: "{{ route('cart.rmvall') }}",
                method: 'post',
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
               // data: { userid: userId},
                success: function(response) {
                
                    $('.items').empty();
                    $('#cart-cnt').html(response.message);
                    $('#total-cart').html('Tsh ' + response.message2);
                    $('#superscript').html(response.message3);
                    //alert(response.message);

                   if(response.message2="0"){
                    $('#chkoutid').hide();
                    $('#chkoutid1').hide();
                   }

                    
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
            });
        });




        $('.qty-cart').on('click', function(e) {
           e.preventDefault();
            var productId = $(this).attr('data-id');
            //var newprice=$(this).attr('data-idd');
            var productqnt = $('#qty-' + productId).val();
           //console.log(productqnt)
            $.ajax({
                url: "{{ route('cart.qtyadd') }}",
                method: 'POST',
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                data: { id: productId, qty: productqnt},
                success: function(response) {
                
                   
                    $('#crtprice-' + productId).html('Tsh ' + response.message);
                    $('#total-cart').html('Tsh ' + response.message2);
                    
                    //alert(response.message);
                    
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
            });
        });

        $(document).ready(function() {
        $('.closed').click(function(e) {
           e.preventDefault();   
           window.location.href = '/';       
            });
        });




        $('.checkout').on('click', function(e) {
           e.preventDefault();
            var name = $('#name').val();
            var phone = $('#phone').val();
            var additional = $('#additional').val();
            var address = $('#address').val();
            var email = $('#email').val();
            var cash = $('input[name="cash"]:checked').val();
            
           
            $.ajax({
                url: "{{ route('cart.checkout') }}",
                method: 'POST',
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                data: { name: name, phone: phone,
                        email: email, address: address,
                        additional: additional, cash: cash    
                },
                success: function(response) {
                    $('#clox').trigger('click');
                    $('#thank').trigger('click');
                   // $('#ignismyModal').show();
                    $('#mycode').html(response.message);
                    
                    //alert(response.message);
                    
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
            });
        });

           </script>








   </body>
<style>
    /*--thank you pop starts here--*/
.thank-you-pop{
	width:100%;
 	padding:20px;
	text-align:center;
}
.thank-you-pop img{
	width:76px;
	height:auto;
	margin:0 auto;
	display:block;
	margin-bottom:25px;
}

.thank-you-pop h1{
	font-size: 42px;
    margin-bottom: 25px;
	color:#5C5C5C;
}
.thank-you-pop p{
	font-size: 20px;
    margin-bottom: 27px;
 	color:#5C5C5C;
}
.thank-you-pop h3.cupon-pop{
	font-size: 25px;
    margin-bottom: 40px;
	color:#222;
	display:inline-block;
	text-align:center;
	padding:10px 20px;
	border:2px dashed #222;
	clear:both;
	font-weight:normal;
}
.thank-you-pop h3.cupon-pop span{
	color:#03A9F4;
}
.thank-you-pop a{
	display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
}
.thank-you-pop a i{
	margin-right:5px;
	color:#fff;
}
#ignismyModal .modal-header{
    border:0px;
}
/*--thank you pop ends here--*/

    </style>



   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--Model Popup starts-->
<div class="container">
    <div class="row">
        <button id="thank" data-toggle="modal" aria-hidden="true" href="#ignismyModal"></button>
        <div class="modal fade" id="ignismyModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close closed" data-dismiss="modal" aria-label=""><span>×</span></button>
                     </div>
					
                    <div class="modal-body">
                       
						<div class="thank-you-pop">
							<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
							<h1>Thank You!</h1>
							<p>Your submission is received and your order will be delivered soon!</p>
							<h3 class="cupon-pop">Your Id: <div id="mycode" style="color:red;"></div><span id="code"></span> Please note this code for future reference</h3>
							
 						</div>
                         
                    </div>
					
                </div>
            </div>
        </div>
    </div>
</div>
<!--Model Popup ends-->

</html>

