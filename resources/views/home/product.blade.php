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
                      <form action="{{ url('add_cart',$product->id) }}" method="post" >
                        @csrf
                      <div class="input-group quantity-selector quantity-selector-sm">
                        <input type="number" id="inputQuantitySelectorSm" class="form-control" aria-live="polite" style="width: 15px;border-radius:35px;border-color:black;text-align:center" placeholder="Quantity" data-bs-step="counter" name="quantity" title="quantity" value="1" min="1"  step="1" data-bs-round="0" aria-label="Quantity selector">
                        
                      </div>
                      
                      <button type="submit" style="border:none;background-color:transparent" value="Add to cart">
                      <a  class="option2">
                      Add to cart
                      </a></button>
                    
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