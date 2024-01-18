 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5">
   <div class="container py-5">
       <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;">
           <div class="row g-4">
               <div class="col-lg-3">
                   <a href="#">
                       <h1 class="text-primary mb-0">Fruitables</h1>
                       <p class="text-secondary mb-0">Fresh products</p>
                   </a>
               </div>
               <div class="col-lg-6">
                   <div class="position-relative mx-auto">
                       <input class="form-control border-0 w-100 py-3 px-4 rounded-pill" type="number" placeholder="Your Email">
                       <button type="submit" class="btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white" style="top: 0; right: 0;">Subscribe Now</button>
                   </div>
               </div>
               <div class="col-lg-3">
                   <div class="d-flex justify-content-end pt-3">
                       <a class="btn  btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                       <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                       <a class="btn btn-outline-secondary me-2 btn-md-square rounded-circle" href=""><i class="fab fa-youtube"></i></a>
                       <a class="btn btn-outline-secondary btn-md-square rounded-circle" href=""><i class="fab fa-linkedin-in"></i></a>
                   </div>
               </div>
           </div>
       </div>
       <div class="row g-5">
           <div class="col-lg-3 col-md-6">
               <div class="footer-item">
                   <h4 class="text-light mb-3">Why People Like us!</h4>
                   <p class="mb-4">typesetting, remaining essentially unchanged. It was 
                       popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                   <a href="" class="btn border-secondary py-2 px-4 rounded-pill text-primary">Read More</a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="d-flex flex-column text-start footer-item">
                   <h4 class="text-light mb-3">Shop Info</h4>
                   <a class="btn-link" href="">About Us</a>
                   <a class="btn-link" href="">Contact Us</a>
                   <a class="btn-link" href="">Privacy Policy</a>
                   <a class="btn-link" href="">Terms & Condition</a>
                   <a class="btn-link" href="">Return Policy</a>
                   <a class="btn-link" href="">FAQs & Help</a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="d-flex flex-column text-start footer-item">
                   <h4 class="text-light mb-3">Account</h4>
                   <a class="btn-link" href="">My Account</a>
                   <a class="btn-link" href="">Shop details</a>
                   <a class="btn-link" href="">Shopping Cart</a>
                   <a class="btn-link" href="">Wishlist</a>
                   <a class="btn-link" href="">Order History</a>
                   <a class="btn-link" href="">International Orders</a>
               </div>
           </div>
           <div class="col-lg-3 col-md-6">
               <div class="footer-item">
                   <h4 class="text-light mb-3">Contact</h4>
                   <p>Address: 1429 Netus Rd, NY 48247</p>
                   <p>Email: Example@gmail.com</p>
                   <p>Phone: +0123 4567 8910</p>
                   <p>Payment Accepted</p>
                   <img src="img/payment.png" class="img-fluid" alt="">
               </div>
           </div>
       </div>
   </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
   <div class="container">
       <div class="row">
           <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
               <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
           </div>
           <div class="col-md-6 my-auto text-center text-md-end text-white">
               <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
               <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
               <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
               Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
           </div>
       </div>
   </div>
</div>
<!-- Copyright End -->



<!-- Back to Top -->
<a href="#" class="btn btn-primary border-3 border-primary rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>   


<!-- JavaScript Libraries -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="home/lib/easing/easing.min.js"></script>
<script src="home/lib/waypoints/waypoints.min.js"></script>
<script src="home/lib/lightbox/js/lightbox.min.js"></script>
<script src="home/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Template Javascript -->
<script src="home/js/main.js"></script>
<script>
$('.add-to-cart-btn').on('click', function(e) {
   e.preventDefault();
    var productId = $(this).attr('data-id');
    var productqnt ="1";
    $.ajax({
        url: "{{ route('cart.add') }}",
        method: 'POST',
        headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
        data: { id: productId, qty: productqnt},
        success: function(response) {
            $('#superscript').html(response.message2);
            $('#cart-' + productId).html(response.message);
            //$('#sub-btn-' + productId).hide();
           // setTimeout(function() {
         // $('#cart-' + productId).empty();
      //  }, 5000);
            $('#sub-btn-' + productId).css('display', 'none');  
        },
        error: function(xhr, status, error) {
            // Handle any errors that occur during the request
        }
    });
});



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
                    $('#total-cart').html('Tsh ' + response.message2);
                    $('#total-cart1').html('Tsh ' + response.message2);
                    $('#superscript').html(response.message3);
                    if(response.message2=="0"){
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
            var productqnt = $('#qty-' + productId).val();
            console.log(productqnt)
           
            $.ajax({
                url: "{{ route('cart.qtyadd') }}",
                method: 'POST',
                headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
                data: { id: productId, qty: productqnt},
                success: function(response) {
                    $('#price-' + productId).html('Tsh ' + response.message);
                    $('#total-cart').html('Tsh ' + response.message2);
                    $('#total-cart1').html('Tsh ' + response.message2);
                    
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
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
                    window.location.href = '/';
                  //  $('#clox').trigger('click');
                   //$('#thank').trigger('click');
                    //$('#ignismyModal').show();
                   // $('#mycode').html(response.message);
                    
                    //alert(response.message);
                    
                },
                error: function(xhr, status, error) {
                    // Handle any errors that occur during the request
                }
            });
        });



        $('.add_product').on('click', function(e) {
   e.preventDefault();
    var productId = $(this).attr('data-id');
    var productqnt = $('#prod_qty').val();
    //console.log(productqnt);
    $.ajax({
        url: "{{ route('cart.addproduct') }}",
        method: 'POST',
        headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
        data: { id: productId, qty: productqnt},
        success: function(response) {
            $('#superscript').html(response.message);
           // $('#cart-' + productId).html(response.message);
            $('.add_product').hide();
           // setTimeout(function() {
         // $('#cart-' + productId).empty();
      //  }, 5000);
        //    $('#sub-btn-' + productId).css('display', 'none');
            //alert(response.message);
            
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
                    
                    $('#total-cart').html('Tsh ' + response.message2);
                    $('#total-cart1').html('Tsh ' + response.message2);
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

</script>