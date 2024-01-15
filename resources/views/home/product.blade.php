<?php use App\Models\Cart;
use App\Models\Product; ?>

<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>
       <div class="row">

         @foreach ($product as $product )
            
      

          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="{{ url('product_details',$product->id) }}" class="option1">
                    Product Details
                      </a>
                      <form>
                        @csrf
                        <div id="cart-{{$product->id}}">
                           <!--h6  style="text-align:center !important;border:solid;background-color:white;border-radius:30px;margin-top:10px;width:170px;" class="">
                             Added to cart
                           </h6--></div>
                        @if(Cart::where('product_id',$product->id)->where('user_id',Session::get('key'))->exists())
                     
                     
      
                     
                    <div id="cart-{{$product->id}}">
                      <h6  style="text-align:center !important;border:solid;background-color:white;border-radius:30px;margin-top:10px;width:170px;" class="">
                        Added to cart
                      </h6></div>
                 @else
                 <div class="input-group quantity-selector quantity-selector-sm">
                  <input type="number" id="inputQuantitySelectorSm-{{$product->id}}" data-qty="" class="form-control" aria-live="polite" style="width: 15px;border-radius:35px;border-color:black;text-align:center" placeholder="Quantity" data-bs-step="counter" name="quantity" title="quantity" value="1" min="1"  step="1" data-bs-round="0" aria-label="Quantity selector">
                 
                </div>
                      <button type="submit" style="text-align: center !important;border: solid;background-color: white;border-radius: 30px;margin-top: 10px;width: 170px;" id="sub-btn-{{$product->id}}" class="add-to-cart-btn" data-id="{{$product->id}}"  style="border:none;background-color:transparent" value="Add to cart">
                      Add to cart</button>
                    @endif
                  
                      </form>
                   </div>
                </div>
                <div class="img-box">
                   <img src="/product/{{$product->image}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>
                     {{ $product->title }}
                   </h5>


                @if($product->discount_price!=null)
   

                   <h6 style="color:red;">
                     Discount Price<br>
                  Tsh {{ $product->discount_price }}
                    </h6>

                   <h6 style="text-decoration:line-through;color:blue;">
                    Tsh {{ $product->price }}
                   </h6>
                  @else
                   <h6 style="color:blue;">
                     Tsh {{ $product->price }}
                    </h6>

                   @endif

                </div>
             </div>
          </div>
          @endforeach
       </div>
       
    </div>
 </section>

 <script>
$('.add-to-cart-btn').on('click', function(e) {
   e.preventDefault();
    var productId = $(this).attr('data-id');
    
    var productqnt = $('#inputQuantitySelectorSm-' + productId).val();
    $.ajax({
        url: "{{ route('cart.add') }}",
        method: 'POST',
        data: { id: productId, qty: productqnt},
        success: function(response) {
        
            $('#cart-' + productId).html(response.message);
            $('#inputQuantitySelectorSm-' + productId).hide();
            setTimeout(function() {
          $('#cart-' + productId).empty();
        }, 5000);
            $('#sub-btn-' + productId).css('display', 'none');
            //alert(response.message);
            
        },
        error: function(xhr, status, error) {
            // Handle any errors that occur during the request
        }
    });
});
   </script>